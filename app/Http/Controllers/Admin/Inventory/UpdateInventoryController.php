<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class UpdateInventoryController extends Controller
{
    public function __invoke(Request $request, Inventory $inventory)
    {
        $data = $request->validate([
            'cube' => 'required|integer|min:1|max:6',
            'structure' => 'required|string',
        ]);
        $inventory->update($data);
        $inventories = Inventory::all();

        return view('admin.inventory.index', compact('inventory', 'inventories'));
    }
}
