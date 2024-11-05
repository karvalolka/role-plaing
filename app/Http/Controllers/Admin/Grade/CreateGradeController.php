<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Subgrade;

class CreateGradeController extends Controller
{
    public function __invoke()
    {
        $subgrades = Subgrade::all();
        return view('admin.grade.create', compact('subgrades'));
    }
}
