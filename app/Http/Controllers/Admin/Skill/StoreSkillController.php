<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class StoreSkillController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'level' => 'required|integer|min:1|max:10',
            'class_id' => 'required|exists:grades,id'
        ]);

        $skill = Skill::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'level' => $data['level'],
        ]);

        $skill->grades()->attach($data['class_id']);

        return redirect()->route('admin.skill.index');
    }
}
