<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Cube;
use App\Models\Grade;
use App\Models\Race;
use App\Models\TypeAbility;

class CreateAbilityController extends Controller
{
    public function __invoke()
    {
        $grades = Grade::all();
        $races = Race::all();
        $typeAbilities = TypeAbility::all();
        $cubes = Cube::all();
        return view('admin.ability.create', compact('grades', 'races', 'typeAbilities', 'cubes'));
    }
}
