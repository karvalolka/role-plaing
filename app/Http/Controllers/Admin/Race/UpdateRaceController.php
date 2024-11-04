<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Race;
use Illuminate\Http\Request;

class UpdateRaceController extends Controller
{
    public function __invoke(Request $request, Race $race)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $race->update($data);
        $races = Race::all();
        return redirect()->route('admin.race.index', compact('races'));
    }
}
