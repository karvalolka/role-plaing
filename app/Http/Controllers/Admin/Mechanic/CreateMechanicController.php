<?php

namespace App\Http\Controllers\Admin\Mechanic;

use App\Http\Controllers\Controller;

class CreateMechanicController extends Controller
{
    public function __invoke()
    {
        return view('admin.mechanic.create');
    }
}
