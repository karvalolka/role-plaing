<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use App\Models\Cube;
use App\Models\Grade;
use App\Models\Race;
use Illuminate\Http\Request;

class StoreAbilityController extends Controller
{
    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type_ability' => 'required|array',
            'type_ability.*' => 'exists:type_abilities,id',
            'class_id' => 'nullable|array',
            'class_id.*' => 'nullable|exists:grades,id',
            'race_id' => 'nullable|array',
            'race_id.*' => 'nullable|exists:races,id',
            'cube_id' => 'nullable|array',
            'cube_id.*' => 'nullable|exists:cubes,id',
        ]);

        $ability = Ability::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
        ]);

        $ability->typeAbilities()->sync($validatedData['type_ability']);

        if (isset($validatedData['class_id'])) {
            $validGradeIds = Grade::whereIn('id', $validatedData['class_id'])->pluck('id')->toArray();
            if (!empty($validGradeIds)) {
                $ability->grades()->sync($validGradeIds);
            }
        }


        if (isset($validatedData['race_id'])) {
            $validRaceIds = Race::whereIn('id', $validatedData['race_id'])->pluck('id')->toArray();
            if (!empty($validRaceIds)) {
                $ability->races()->sync($validRaceIds);
            }
        }

        if (isset($validatedData['cube_id'])) {
            $validCubeIds = Cube::whereIn('id', $validatedData['cube_id'])->pluck('id')->toArray();
            if (!empty($validCubeIds)) {
                $ability->cubes()->sync($validCubeIds);
            }
        }

        return redirect()->route('admin.ability.index');
    }
}
