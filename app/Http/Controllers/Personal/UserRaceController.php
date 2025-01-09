<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Race;

class UserRaceController extends Controller
{
    public function __invoke(Race $race)
    {
        $races = Race::findOrFail();
        return view('personal.race.show', compact('races'));
    }
}
