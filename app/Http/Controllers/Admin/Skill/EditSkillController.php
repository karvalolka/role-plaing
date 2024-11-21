<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Skill;

class EditSkillController extends Controller
{
    public function __invoke(Skill $skill)
    {
        $grades = Grade::all();
        return view('admin.skill.edit', compact('skill', 'grades'));
    }
}
