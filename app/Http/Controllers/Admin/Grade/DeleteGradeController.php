<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class DeleteGradeController extends Controller
{
    public function __invoke(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('admin.grade.index');
    }
}
