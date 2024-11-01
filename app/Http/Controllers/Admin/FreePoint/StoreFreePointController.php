<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;
use Illuminate\Http\Request;

class StoreFreePointController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'points' => 'required|integer',
            'name' => 'required|string',
        ]);
        FreePoint::firstOrCreate($data);
        return redirect()->route('admin.freePoint.index');
    }
}
