<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\FreePoint;
use App\Models\Inventory;
use App\Models\Skill;
use Illuminate\Http\Request;

class UpdateCharController extends Controller
{
    public function __invoke(Request $request, Char $char)
    {
        // Валидация данных из формы
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'race_id' => 'required|integer|exists:races,id',
            'grade_id' => 'required|integer|exists:grades,id',
            'inventory_id' => 'required|integer|exists:inventories,id',
            'free_point_id' => 'nullable|array',
            'free_point_id.*' => 'exists:free_points,id',
            'free_point_count' => 'nullable|array',
            'free_point_count.*' => 'integer|min:0',
            'strength' => 'required|integer|min:1,max:6',
            'agility' => 'required|integer|min:1,max:6',
            'stamina' => 'required|integer|min:1,max:6',
            'reception' => 'required|integer|min:1,max:6',
            'intelligence' => 'required|integer|min:1,max:6',
            'charisma' => 'required|integer|min:1,max:6',
            'luck' => 'required|integer|min:1,max:6',
            'fortitude' => 'required|integer|min:1,max:6',
        ]);

        // Получаем навык для класса персонажа
        $skill = Skill::whereHas('grades', function ($query) use ($data) {
            $query->where('grade_id', $data['grade_id']);
        })->first();

        if ($skill) {
            $data['skill_id'] = $skill->id;
        } else {
            return redirect()->back()->withErrors(['grade_id' => 'Для выбранного класса не найден навык.']);
        }

        // Обновляем основную информацию о персонаже
        $char->update([
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'race_id' => $data['race_id'],
            'grade_id' => $data['grade_id'],
            'inventory_id' => $data['inventory_id'],
            'skill_id' => $data['skill_id'],
            'strength' => $data['strength'],
            'agility' => $data['agility'],
            'stamina' => $data['stamina'],
            'reception' => $data['reception'],
            'intelligence' => $data['intelligence'],
            'charisma' => $data['charisma'],
            'luck' => $data['luck'],
            'fortitude' => $data['fortitude'],
        ]);

        // Получаем инвентарь персонажа и золото из него
        $inventory = Inventory::find($data['inventory_id']);
        $goldFromInventory = (float) $inventory->gold;

        // Переменная для накопления золота с FreePoint
        $goldFromFreePoints = 0;

        // Получаем выбранные FreePoint и их количество из запроса
        $selectedFreePoints = $request->input('free_point_id', []);
        $freePointCounts = $request->input('free_point_count', []);

        // Пробегаем по выбранным FreePoint и считаем золото
        foreach ($selectedFreePoints as $freePointId) {
            $quantity = isset($freePointCounts[$freePointId]) ? $freePointCounts[$freePointId] : 0;
            if ($quantity > 0) {
                $freePoint = FreePoint::find($freePointId);
                if ($freePoint && isset($freePoint->gold) && (float)$freePoint->gold > 0) {
                    // Умножаем количество FreePoint на стоимость золота для этого FreePoint
                    $goldFromFreePoints += (float)$freePoint->gold * (float)$quantity;
                }
            }
        }

        // Суммируем золото из инвентаря и FreePoints
        $totalGold = $goldFromInventory + $goldFromFreePoints;

        // Обновляем золото для персонажа
        $char->update(['gold' => $totalGold]);

        // Сохраняем связи с FreePoints
        $validFreePoints = [];

        // Если были выбраны FreePoints, сохраняем их в таблицу связей
        if ($selectedFreePoints) {
            foreach ($selectedFreePoints as $freePointId) {
                $quantity = isset($freePointCounts[$freePointId]) ? $freePointCounts[$freePointId] : 0;

                if ($quantity > 0) {
                    $validFreePoints[] = ['free_point_id' => $freePointId, 'quantity' => $quantity];
                }
            }
        }

        // Очищаем старые связи с FreePoints перед сохранением новых
        if (!empty($validFreePoints)) {
            $char->freePoints()->detach(); // Удаляем старые связи

            foreach ($validFreePoints as $validFreePoint) {
                $freePointId = $validFreePoint['free_point_id'];
                $quantity = $validFreePoint['quantity'];

                // Проверяем, есть ли уже связь с этим FreePoint
                $existingPivot = $char->freePoints()->where('free_point_id', $freePointId)->first();

                if ($existingPivot) {
                    // Если связь существует, обновляем количество
                    $existingPivot->pivot->increment('quantity', $quantity);
                } else {
                    // Если связи нет, создаем новую
                    $char->freePoints()->attach($freePointId, ['quantity' => $quantity]);
                }
            }
        }

        // Загружаем данные о FreePoints для отображения в представлении
        $char->load('freePoints');
        $free_points = FreePoint::all();
        $chares = Char::all();

        // Возвращаемся на страницу редактирования с обновленными данными
        return view('admin.char.index', compact('char', 'chares', 'free_points'));
    }

}
