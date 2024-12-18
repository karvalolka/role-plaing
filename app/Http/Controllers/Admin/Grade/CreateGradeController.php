<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;

class CreateGradeController extends Controller
{
    public function __invoke()
    {
        return view('admin.grade.create');
    }
}
