<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;

class EditFreePointController extends Controller
{
    public function __invoke(FreePoint $freePoint)
    {
        return view('admin.freePoint.edit', compact('freePoint'));
    }
}
