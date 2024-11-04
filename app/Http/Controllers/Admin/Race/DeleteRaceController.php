<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Race;

class DeleteRaceController extends Controller
{
    public function __invoke(Race $race)
    {
        $race->delete();
        return redirect()->route('admin.race.index');
    }
}
