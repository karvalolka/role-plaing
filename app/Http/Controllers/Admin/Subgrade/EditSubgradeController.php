<?php

namespace App\Http\Controllers\Admin\Subgrade;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Subgrade;

class EditSubgradeController extends Controller
{
    public function __invoke(Subgrade $subgrade)
    {
        $grades = Grade::all();
        return view('admin.subgrade.edit', compact('subgrade', 'grades'));
    }
}
