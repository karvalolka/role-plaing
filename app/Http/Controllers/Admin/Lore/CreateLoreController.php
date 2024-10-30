<?php

namespace App\Http\Controllers\Admin\Lore;

use App\Http\Controllers\Controller;

class CreateLoreController extends Controller
{
    public function __invoke()
    {
        return view('admin.lore.create');
    }
}
