<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;

class CreateFreePointController extends Controller
{
    public function __invoke()
    {
        return view('admin.freePoint.create');
    }
}
