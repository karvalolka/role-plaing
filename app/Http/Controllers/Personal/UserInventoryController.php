<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Inventory;

class UserInventoryController extends Controller
{
    public function __invoke(Inventory $inventory)
    {
        $inventory = Inventory::findOrFail();
        return view('personal.inventory.show', compact('inventory'));
    }
}
