<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Race;
use App\Models\Subrace;

class EditSubraceController extends Controller
{
    public function __invoke(Subrace $subrace)
    {
        $races = Race::all();
        return view('admin.subrace.edit', compact('subrace', 'races'));
    }
}
