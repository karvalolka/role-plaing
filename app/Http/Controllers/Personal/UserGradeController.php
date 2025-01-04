<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class UserGradeController extends Controller
{
    public function __invoke($id)
    {
        $grades = Grade::with('skills')->findOrFail($id);
        return view('personal.grade.show', compact('grades'));
    }
}
