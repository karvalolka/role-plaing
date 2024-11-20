<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;

class AbilityController extends Controller
{
    public function __invoke()
    {
        $abilities = Ability::orderBy('name', 'asc')->get();
        return view('admin.ability.index', compact('abilities'));
    }
}
