<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;

class EditAbilityController extends Controller
{
    public function __invoke(Ability $ability)
    {
        return view('admin.ability.edit', compact('ability'));
    }
}
