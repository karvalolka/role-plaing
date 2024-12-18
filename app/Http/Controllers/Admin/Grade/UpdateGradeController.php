<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class UpdateGradeController extends Controller
{
    public function __invoke(Request $request, Grade $grade)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $grade->update($data);
        $grades = Grade::all();
        return redirect()->route('admin.grade.index', compact('grades'));
    }
}
