<?php

namespace App\Http\Controllers\Admin\Lore;

use App\Http\Controllers\Controller;
use App\Models\Lore;
use Illuminate\Http\Request;

class StoreLoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'text' => 'required|string',
        ]);
        Lore::firstOrCreate($data);
        return redirect()->route('admin.lore.index');
    }
}
