<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;

class DeleteFreePointController extends Controller
{
    public function __invoke(FreePoint $freePoint)
    {
        $freePoint->delete();
        return redirect()->route('admin.freePoint.index');
    }
}
