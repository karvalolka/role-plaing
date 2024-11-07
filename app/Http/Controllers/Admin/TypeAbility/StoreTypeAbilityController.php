<?php

namespace App\Http\Controllers\Admin\TypeAbility;

use App\Http\Controllers\Controller;
use App\Models\TypeAbility;
use Illuminate\Http\Request;

class StoreTypeAbilityController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        TypeAbility::firstOrCreate($data);
        return redirect()->route('admin.typeAbility.index');
    }
}
