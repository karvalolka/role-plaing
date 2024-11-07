<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;

class AbilityController extends Controller
{
    public function __invoke()
    {
        $abilities = Ability::all();
        return view('admin.ability.index', compact('abilities'));
    }
}
