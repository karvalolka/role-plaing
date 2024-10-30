<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory;

class EditInventoryController extends Controller
{
    public function __invoke(Inventory $inventory)
    {
        return view('admin.inventory.edit', compact('inventory'));
    }
}
