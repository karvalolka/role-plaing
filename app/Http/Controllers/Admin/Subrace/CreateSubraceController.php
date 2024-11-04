<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Race;

class CreateSubraceController extends Controller
{
    public function __invoke()
    {
        $races = Race::all();
        return view('admin.subrace.create', compact('races'));
    }
}
