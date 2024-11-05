<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class EditGradeController extends Controller
{
    public function __invoke(Grade $grade)
    {
        return view('admin.grade.edit', compact('grade'));
    }
}
