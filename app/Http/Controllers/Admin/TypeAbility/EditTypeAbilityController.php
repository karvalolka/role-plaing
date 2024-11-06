<?php

namespace App\Http\Controllers\Admin\TypeAbility;

use App\Http\Controllers\Controller;
use App\Models\TypeAbility;

class EditTypeAbilityController extends Controller
{
    public function __invoke(TypeAbility $typeAbility)
    {
        return view('admin.typeAbility.edit', compact('typeAbility'));
    }
}
