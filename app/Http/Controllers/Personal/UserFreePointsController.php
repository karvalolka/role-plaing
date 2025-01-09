<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;

class UserFreePointsController extends Controller
{
    public function __invoke(FreePoint $freePoint)
    {
        $free_points = FreePoint::findOrFail();
        return view('personal.freePoint.show', compact('free_points'));
    }
}
