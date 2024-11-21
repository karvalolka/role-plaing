<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class CreateSkillController extends Controller
{
    public function __invoke()
    {
        $grades = Grade::all();
        return view('admin.skill.create', compact('grades'));
    }
}
