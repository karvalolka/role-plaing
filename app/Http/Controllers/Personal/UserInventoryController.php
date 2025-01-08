<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Inventory;

class UserInventoryController extends Controller
{
    public function __invoke($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('personal.inventory.show', compact('inventory'));
    }
}
