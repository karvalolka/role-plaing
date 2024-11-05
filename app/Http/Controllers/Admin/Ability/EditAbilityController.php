<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use App\Models\Grade;
use App\Models\Race;

class EditAbilityController extends Controller
{
    public function __invoke(Ability $ability)
    {
        $grades = Grade::all();
        $races = Race::all();
        return view('admin.ability.edit', compact('ability', 'grades', 'races'));
    }
}
