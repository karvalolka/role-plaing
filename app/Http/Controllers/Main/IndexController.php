<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Grade;
use App\Models\Race;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $chars = Char::all();
        $racenames = Race::all()->pluck('name', 'id');
        $gradenames = Grade::all()->pluck('name', 'id');
        return view('main.index', compact('chars', 'racenames', 'gradenames'));
    }
}
