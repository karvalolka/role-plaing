<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
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
        return view('admin.char.create', compact('users', 'races', 'grades', 'inventories'));
    }
}
