<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Race;

class RaceController extends Controller
{
    public function __invoke()
    {
        $races = Race::all();
        return view('admin.race.index', compact('races'));
    }
}
