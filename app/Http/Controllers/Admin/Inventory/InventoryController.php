<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function __invoke()
    {
        $inventories = Inventory::all();
        return view('admin.inventory.index', compact('inventories'));
    }
}
