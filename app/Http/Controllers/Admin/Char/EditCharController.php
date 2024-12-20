<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\FreePoint;
use App\Models\Grade;
use App\Models\Inventory;
use App\Models\Race;
use App\Models\User;

class EditCharController extends Controller
{
    public function __invoke(Char $char)
    {
        $users = User::all();
        $races = Race::all();
        $grades = Grade::all();
        $inventories = Inventory::all();
        $freePoints = FreePoint::all();
        return view('admin.char.edit', compact('char', 'users', 'races', 'grades', 'inventories', 'freePoints'));
    }

}
