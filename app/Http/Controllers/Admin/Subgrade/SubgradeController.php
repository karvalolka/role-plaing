<?php

namespace App\Http\Controllers\Admin\Subgrade;

use App\Http\Controllers\Controller;
use App\Models\Subgrade;

class SubgradeController extends Controller
{
    public function __invoke()
    {
        $subgrades = Subgrade::with('grade')->get();
        return view('admin.subgrade.index', compact('subgrades'));
    }
}
