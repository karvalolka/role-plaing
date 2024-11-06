<?php

namespace App\Http\Controllers\Admin\TypeAbility;

use App\Http\Controllers\Controller;
use App\Models\TypeAbility;
use Illuminate\Http\Request;

class UpdateTypeAbilityController extends Controller
{
    public function __invoke(Request $request, TypeAbility $typeAbility)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        $typeAbility->update($data);
        $typeAbilities = TypeAbility::all();

        return view('admin.typeAbility.index', compact('typeAbility', 'typeAbilities'));
    }
}
