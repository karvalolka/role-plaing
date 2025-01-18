<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;
use App\Models\Grade;
use App\Models\Inventory;
use App\Models\Race;
use App\Models\Skill;
use Illuminate\Http\Request;

class CreateCharController extends Controller
{
    public function __invoke(Request $request)
    {
        $races = Race::all();
        $grades = Grade::all();
        $skills = Skill::all();
        $inventories = Inventory::all();
        $free_points = FreePoint::all();
        return view('personal.char.create', compact( 'races', 'grades', 'inventories', 'free_points', 'skills'));
    }

}
