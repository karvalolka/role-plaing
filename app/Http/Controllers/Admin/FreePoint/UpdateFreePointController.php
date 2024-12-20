<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;
use Illuminate\Http\Request;

class UpdateFreePointController extends Controller
{
    public function __invoke(Request $request, FreePoint $freePoint)
    {
        $data = $request->validate([
            'points' => 'required|integer',
            'name' => 'required|string',
        ]);
        $freePoint->update($data);
        $freePoints = FreePoint::all();
        $groupedFreePoints = $freePoints->groupBy('points');

        return view('admin.freePoint.index', compact('freePoint', 'freePoints', 'groupedFreePoints'));
    }
}
