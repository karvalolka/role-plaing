<?php

namespace App\Http\Controllers\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Race;
use Illuminate\Http\Request;

class StoreRaceController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'hp' => 'nullable|string',
            'mp/sm' => 'nullable|string',
            'strength' => 'nullable|string',
            'agility' => 'nullable|string',
            'stamina' => 'nullable|string',
            'reception' => 'nullable|string',
            'intelligence' => 'nullable|string',
            'charisma' => 'nullable|string',
            'luck' => 'nullable|string',
            'fortitude' => 'nullable|string',
            'icon_svg' => 'nullable|string',
        ]);

        Race::firstOrCreate($data);
        return redirect()->route('admin.race.index');
    }
}
