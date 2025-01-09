<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class UserGradeController extends Controller
{
    public function __invoke(Grade $grade)
    {
        $grades = Grade::with('skills')->findOrFail();
        return view('personal.grade.show', compact('grades'));
    }
}
