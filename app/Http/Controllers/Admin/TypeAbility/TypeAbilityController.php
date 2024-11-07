<?php

namespace App\Http\Controllers\Admin\TypeAbility;

use App\Http\Controllers\Controller;
use App\Models\TypeAbility;

class TypeAbilityController extends Controller
{
    public function __invoke()
    {
        $typeAbilities = TypeAbility::all();
        return view('admin.typeAbility.index', compact('typeAbilities'));
    }

}
