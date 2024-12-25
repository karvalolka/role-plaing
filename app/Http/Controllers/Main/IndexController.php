<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\FreePoint;
use App\Models\Grade;
use App\Models\Lore;
use App\Models\Mechanic;
use App\Models\Race;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $chars = Char::all();
        $racenames = Race::all()->pluck('name', 'id');
        $gradenames = Grade::all()->pluck('name', 'id');
        $lores = Lore::all();
        $races = Race::all();
        $grades = Grade::all();
        $freePoints = FreePoint::all();
        $mechanics = Mechanic::all();
        return view('main.index', compact('chars', 'racenames', 'gradenames', 'lores', 'races', 'grades', 'freePoints', 'mechanics'));
    }
}
