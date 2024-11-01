<?php

namespace App\Http\Controllers\Admin\Mechanic;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;

class EditMechanicController extends Controller
{
    public function __invoke(Mechanic $mechanic)
    {
        return view('admin.mechanic.edit', compact('mechanic'));
    }
}
