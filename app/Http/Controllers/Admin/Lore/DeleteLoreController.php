<?php

namespace App\Http\Controllers\Admin\Lore;

use App\Http\Controllers\Controller;
use App\Models\Lore;

class DeleteLoreController extends Controller
{
    public function __invoke(Lore $lore)
    {
        $lore->delete();
        return redirect()->route('admin.lore.index');
    }
}
