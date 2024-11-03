<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use Illuminate\Http\Request;

class UpdateAbilityController extends Controller
{
    public function __invoke(Request $request, Ability $ability)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'condition' => 'nullable|array',
            'description' => 'required|string',
            'class_race' => 'required|in:class,race,other',
            'cube' => 'nullable|array',
        ]);

        $ability->update([
            'name' => $request['name'],
            'class_race' => $request['class_race'],
            'condition' =>  json_encode($request['condition'] ?? []),
            'description' => $request['description'],
        ]);
        $abilities = Ability::all();
        $groupedAbilities = $abilities->groupBy('class_race');

        return view('admin.ability.index', compact('ability', 'abilities', 'groupedAbilities'));
    }
}
