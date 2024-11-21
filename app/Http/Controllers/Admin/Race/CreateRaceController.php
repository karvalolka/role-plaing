<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;

class CreateRaceController extends Controller
{
    public function __invoke()
    {
        return view('admin.race.create');
    }
}
