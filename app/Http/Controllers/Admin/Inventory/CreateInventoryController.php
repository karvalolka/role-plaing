<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Cube;

class CreateInventoryController extends Controller
{
    public function __invoke()
    {
        $cubes = Cube::all();
        return view('admin.inventory.create', compact('cubes'));
    }
}
