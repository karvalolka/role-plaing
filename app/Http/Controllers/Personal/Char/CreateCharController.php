<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;
use App\Models\Grade;
use App\Models\Inventory;
use App\Models\Race;
use App\Models\User;

class CreateCharController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $races = Race::all();
        $grades = Grade::all();
        $inventories = Inventory::all();
        $free_points = FreePoint::all();
        return view('personal.char.create', compact('users', 'races', 'grades', 'inventories', 'free_points'));
    }
}
