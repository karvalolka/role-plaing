<?php

namespace App\Http\Controllers\Admin\Lore;

use App\Http\Controllers\Controller;
use App\Models\Lore;

class LoreController extends Controller
{
    public function __invoke()
    {
        $lores = Lore::all();
        return view('admin.lore.index', compact('lores'));
    }
}
