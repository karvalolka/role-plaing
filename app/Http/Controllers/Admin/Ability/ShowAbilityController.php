<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;

class ShowAbilityController extends Controller
{
    public function __invoke(Ability $ability)
    {
        return view('admin.ability.show', compact('ability'));
    }
}
