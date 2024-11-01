<?php

namespace App\Http\Controllers\Admin\Mechanic;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function __invoke()
    {
        $mechanics = Mechanic::all();
        return view('admin.mechanic.index', compact('mechanics'));
    }
}
