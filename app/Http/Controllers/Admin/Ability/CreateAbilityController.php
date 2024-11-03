<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;

class CreateAbilityController extends Controller
{
    public function __invoke()
    {
        return view('admin.ability.create');
    }
}
