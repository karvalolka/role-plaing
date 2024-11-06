<?php

namespace App\Http\Controllers\Admin\TypeAbility;

use App\Http\Controllers\Controller;
use App\Models\TypeAbility;

class DeleteTypeAbilityController extends Controller
{
    public function __invoke(TypeAbility $typeAbility)
    {
        $typeAbility->delete();
        return redirect()->route('admin.typeAbility.index');
    }
}
