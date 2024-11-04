<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Subrace;

class CreateRaceController extends Controller
{
    public function __invoke()
    {
        $subraces = Subrace::all();
        return view('admin.race.create', compact('subraces'));
    }
}
