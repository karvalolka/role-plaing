<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use Illuminate\Http\Request;

class StoreAbilityController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Ability::firstOrCreate($request);

        return redirect()->route('admin.ability.index');
    }
}
