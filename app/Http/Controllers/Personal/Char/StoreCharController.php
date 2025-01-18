<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Skill;
use App\Models\Inventory;
use App\Models\FreePoint;
use Illuminate\Http\Request;

class StoreCharController extends Controller
{
    public function __invoke(Request $request)
    {
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
            'strength' => 'required|integer|min:1',
            'agility' => 'required|integer|min:1',
            'stamina' => 'required|integer|min:1',
            'reception' => 'required|integer|min:1',
            'intelligence' => 'required|integer|min:1',
            'charisma' => 'required|integer|min:1',
            'luck' => 'required|integer|min:1',
            'fortitude' => 'required|integer|min:1',
        ]);

        $grade_id = $data['grade_id'];

        $skill = Skill::whereHas('grades', function ($query) use ($grade_id) {
            $query->where('grade_id', $grade_id);
        })->first();

        if ($skill) {
            $data['skill_id'] = $skill->id;
        } else {
            return redirect()->back()->withErrors(['grade_id' => 'Для выбранного класса не найден навык.']);
        }

        $char = Char::create([
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'race_id' => $data['race_id'],
            'grade_id' => $data['grade_id'],
            'inventory_id' => $data['inventory_id'],
            'skill_id' => $data['skill_id'],
        ]);

        // Получаем золото из инвентаря
        $inventory = Inventory::find($data['inventory_id']);
        $goldFromInventory = (float) $inventory->gold;

        // Переменная для накопления золота с FreePoint
        $goldFromFreePoints = 0;

        // Получаем данные из запроса
        $selectedFreePoints = $request->input('free_point_id', []);
        $freePointCounts = $request->input('free_point_count', []);

        // Пробегаем по выбранным FreePoint
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

        if ($selectedFreePoints) {
            foreach ($selectedFreePoints as $freePointId) {
                $quantity = isset($freePointCounts[$freePointId]) ? $freePointCounts[$freePointId] : 0;

                if ($quantity > 0) {
                    $validFreePoints[] = ['free_point_id' => $freePointId, 'quantity' => $quantity];
                }
            }
        }

        // Обрабатываем и сохраняем FreePoints в таблицу связей
        if (!empty($validFreePoints)) {
            foreach ($validFreePoints as $validFreePoint) {
                $freePointId = $validFreePoint['free_point_id'];
                $quantity = $validFreePoint['quantity'];

                $existingPivot = $char->freePoints()->where('free_point_id', $freePointId)->first();

                if ($existingPivot) {
                    $existingPivot->pivot->increment('quantity', $quantity);
                } else {
                    $char->freePoints()->attach($freePointId, ['quantity' => $quantity]);
                }
            }
        }

        return redirect()->route('personal.char.index', compact('char'));
    }

}
