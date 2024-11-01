<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;

class FreePointController extends Controller
{
    public function __invoke()
    {
        $freePoints = FreePoint::all();
        $groupedFreePoints = $freePoints->groupBy('points');
        return view('admin.freePoint.index', compact('freePoints', 'groupedFreePoints'));
    }
}
