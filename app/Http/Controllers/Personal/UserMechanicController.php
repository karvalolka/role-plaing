<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;

class UserMechanicController extends Controller
{
    public function __invoke(Mechanic $mechanic)
    {
        $mechanics = Mechanic::findOrFail();
        return view('personal.mechanic.show', compact('mechanics'));
    }
}
