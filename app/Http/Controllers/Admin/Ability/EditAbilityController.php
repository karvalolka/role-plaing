<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use App\Models\Cube;
use App\Models\Grade;
use App\Models\Race;
use App\Models\TypeAbility;

class EditAbilityController extends Controller
{
    public function __invoke(Ability $ability)
    {

        $grades = Grade::all();
        $races = Race::all();
        $typeAbilities = TypeAbility::all();
        $cubes = Cube::all();

        $ability->load('typeAbilities.grades', 'typeAbilities.races', 'typeAbilities.cubes');

        $selectedTypeAbilities = $ability->typeAbilities->pluck('id')->toArray();

        $selectedGrades = $ability->grades->pluck('id');
        $selectedRaces = $ability->races->pluck('id');
        $selectedCubes = $ability->cubes->pluck('id');

        return view('admin.ability.edit', compact(
            'ability',
            'grades',
            'races',
            'typeAbilities',
            'cubes',
            'selectedTypeAbilities',
            'selectedGrades',
            'selectedRaces',
            'selectedCubes'
        ));
    }

}
