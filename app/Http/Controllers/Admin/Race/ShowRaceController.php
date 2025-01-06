<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Race;

class ShowRaceController extends Controller
{
    public function __invoke(Race $race)
    {
        return view('admin.race.show', compact('race'));
    }
}
