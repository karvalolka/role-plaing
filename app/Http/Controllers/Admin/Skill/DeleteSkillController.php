<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;

class DeleteSkillController extends Controller
{
    public function __invoke(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skill.index');
    }
}
