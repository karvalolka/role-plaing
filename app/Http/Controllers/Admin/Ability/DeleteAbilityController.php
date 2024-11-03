<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;

class DeleteAbilityController extends Controller
{
    public function __invoke(Ability $ability)
    {
        $ability->delete();
        return redirect()->route('admin.ability.index');
    }
}
