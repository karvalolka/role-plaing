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
        ]);

        Race::firstOrCreate($data);
        return redirect()->route('admin.race.index');
    }
}
