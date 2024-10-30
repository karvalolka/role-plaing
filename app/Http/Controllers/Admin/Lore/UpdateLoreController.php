<?php

namespace App\Http\Controllers\Admin\Lore;

use App\Http\Controllers\Controller;
use App\Models\Lore;
use Illuminate\Http\Request;

class UpdateLoreController extends Controller
{
    public function __invoke(Request $request, Lore $lore)
    {
        $data = $request->validate([
            'text' => 'required|string',
        ]);
        $lore->update($data);
        $lores = Lore::all();

        return view('admin.lore.index', compact('lore', 'lores'));
    }
}
