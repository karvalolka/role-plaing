<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use Illuminate\Http\Request;

class StoreCharController extends Controller
{
    public function __invoke(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'race_id' => 'required|integer|exists:races,id',
            'grade_id' => 'required|integer|exists:grades,id',
            'inventory_id' => 'required|integer|exists:inventories,id',
        ]);

        Char::firstOrCreate($data);

        return redirect()->route('admin.char.index');
    }
}
