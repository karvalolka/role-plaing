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
            'cube' => 'required|exists:cubes,id',
            'structure' => 'required|string',
            'gold' => 'required|numeric|min:0',
        ]);

        $inventory->update([
            'cube_id' => $data['cube'],
            'structure' => $data['structure'],
            'gold' => $data['gold'],
        ]);

        $inventories = Inventory::all();

        return view('admin.inventory.index', compact('inventory', 'inventories'));
    }
}
