<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Lore;

class UserLoreController extends Controller
{
    public function __invoke(Lore $lore)
    {
        $lores = Lore::findOrFail();
        return view('personal.lore.show', compact('lores'));
    }
}
