<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use App\Models\Grade;
use App\Models\Race;
use App\Models\Cube;
use Illuminate\Http\Request;

class UpdateAbilityController extends Controller
{
    public function __invoke(Request $request, Ability $ability)
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
            'condition' => 'nullable|array',
            'condition.*' => 'nullable|exists:cubes,id',
        ]);


        $ability->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description']
        ]);


        $ability->typeAbilities()->sync($validatedData['type_ability']);

        if (!empty($validatedData['race_id'])) {
            $ability->races()->sync($validatedData['race_id']);
        }

        if (!empty($validatedData['class_id'])) {
            $ability->grades()->sync($validatedData['class_id']);
        }

        if (!empty($validatedData['condition'])) {
            $ability->cubes()->sync($validatedData['condition']);
        }

        $abilities = Ability::all();

        return view('admin.ability.index', compact('ability', 'abilities'));
    }
}
