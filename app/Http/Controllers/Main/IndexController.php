<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Cube;
use App\Models\FreePoint;
use App\Models\Grade;
use App\Models\Inventory;
use App\Models\Lore;
use App\Models\Mechanic;
use App\Models\Race;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $chars = $user->chars;
        $racenames = Race::all()->pluck('name', 'id');
        $gradenames = Grade::all()->pluck('name', 'id');
        $lores = Lore::all();
        $races = Race::all();
        $grades = Grade::all();
        $freePoints = FreePoint::all();
        $mechanics = Mechanic::all();
        $cubes = Cube::all();
        $inventory = Inventory::all();
        return view('main.index', compact('chars', 'racenames', 'gradenames', 'lores', 'races', 'grades', 'freePoints', 'mechanics', 'cubes', 'inventory'));
    }
}
