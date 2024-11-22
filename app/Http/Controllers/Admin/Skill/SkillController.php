<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;

class SkillController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::with('grades')->get();
        $groupedSkills = $skills->groupBy(function ($skill) {
            return $skill->grades->first()->name;
        });        return view('admin.skill.index', compact('skills', 'groupedSkills'));
    }
}
