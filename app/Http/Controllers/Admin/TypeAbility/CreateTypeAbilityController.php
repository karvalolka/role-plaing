<?php

namespace App\Http\Controllers\Admin\TypeAbility;

use App\Http\Controllers\Controller;

class CreateTypeAbilityController extends Controller
{
    public function __invoke()
    {
        return view('admin.typeAbility.create');
    }
}
