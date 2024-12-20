<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Skill;
use Illuminate\Http\Request;

class StoreCharController extends Controller
{
    public function __invoke(Request $request)
    {
        // Валидация данных из формы
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'race_id' => 'required|integer|exists:races,id',
            'grade_id' => 'required|integer|exists:grades,id',
            'inventory_id' => 'required|integer|exists:inventories,id',
            'free_point_id' => 'required|array',
            'free_point_id.*' => 'exists:free_points,id',
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

        $selectedFreePoints = $request->input('free_point_id');

        // Создаем нового персонажа
        $char = Char::create([
            'name' => $data['name'],
            'user_id' => $data['user_id'],
            'race_id' => $data['race_id'],
            'grade_id' => $data['grade_id'],
            'inventory_id' => $data['inventory_id'],
            'skill_id' => $data['skill_id'],
        ]);

        if ($selectedFreePoints) {
            foreach ($selectedFreePoints as $freePointId) {
                $existingPivot = $char->freePoints()->where('free_point_id', $freePointId)->first();

                if ($existingPivot) {
                    $existingPivot->pivot->increment('quantity');
                } else {
                    $char->freePoints()->attach($freePointId, ['quantity' => 1]);
                }
            }
        }

        return redirect()->route('admin.char.index', compact('selectedFreePoints', 'char'));
    }
}
