<?php

namespace App\Http\Controllers\Admin\Subgrade;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class CreateSubgradeController extends Controller
{
    public function __invoke()
    {
        $grades = Grade::all();
        return view('admin.subgrade.create', compact('grades'));
    }
}
