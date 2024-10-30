<?php

namespace App\Http\Controllers\Admin\Lore;

use App\Http\Controllers\Controller;
use App\Models\Lore;

class EditLoreController extends Controller
{
    public function __invoke(Lore $lore)
    {
        return view('admin.lore.edit', compact('lore'));
    }
}
