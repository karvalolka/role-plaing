<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Race;

class CreateAbilityController extends Controller
{
    public function __invoke()
    {
        $grades = Grade::all();
        $races = Race::all();
        return view('admin.ability.create', compact('grades', 'races'));
    }
}
