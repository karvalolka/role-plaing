<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Cube;
use App\Models\Inventory;

class EditInventoryController extends Controller
{
    public function __invoke(Inventory $inventory)
    {
        $cubes = Cube::all();
        return view('admin.inventory.edit', compact('inventory', 'cubes'));
    }
}
