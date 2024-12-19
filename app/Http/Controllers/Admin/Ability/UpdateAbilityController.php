<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
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
            'cube_id' => 'nullable|array',
            'cube_id.*' => 'nullable|exists:cubes,id',
        ]);

        $ability->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description']
        ]);

        $ability->typeAbilities()->sync($validatedData['type_ability']);

        if (!empty($validatedData['race_id'])) {
            $ability->races()->sync($validatedData['race_id']);
        } else {
            $ability->races()->detach();
        }

        if (!empty($validatedData['class_id'])) {
            $ability->grades()->sync($validatedData['class_id']);
        } else {
            $ability->grades()->detach();
        }

        if (!empty($validatedData['cube_id'])) {
            $ability->cubes()->sync($validatedData['cube_id']);
        } else {
            $ability->cubes()->detach();
        }
        $abilities = Ability::orderBy('name', 'asc')->get();

        return view('admin.ability.index', compact('ability', 'abilities'));
    }
}
