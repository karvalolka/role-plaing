<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use Illuminate\Http\Request;

class UpdateCharController extends Controller
{
    public function __invoke(Request $request, Char $char)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'grade_id' => 'required|integer|exists:grades,id',
            'inventory_id' => 'required|integer|exists:inventories,id',
            'freePoint_id' => 'required|integer|exists:free_points,id',
        ]);
        $char->update($data);
        $chares = Char::all();

        return view('admin.char.index', compact('char', 'chares'));
    }
}
