<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use App\Models\Char;
use App\Models\Skill;

class ShowCharController extends Controller
{
    public function __invoke(Char $char)
    {
        $abilities = Ability::whereHas('races', function ($query) use ($char) {
            $query->where('races.id', $char->race_id);
        })
            ->whereHas('grades', function ($query) use ($char) {
                $query->where('grades.id', $char->grade_id);
            })
            ->get();

        $skills = Skill::whereHas('grades', function ($query) use ($char) {
            $query->where('grades.id', $char->grade_id);
        })
            ->get();

        $free_points = $char->freePoints;

        return view('admin.char.show', compact('char', 'abilities', 'skills', 'free_points'));
    }
}
