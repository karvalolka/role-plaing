<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class StoreInventoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'cube' => 'required|exists:cubes,id',
            'structure' => 'required|string',
            'gold' => 'required|numeric|min:0',
        ]);

        Inventory::create([
            'cube_id' => $data['cube'],
            'structure' => $data['structure'],
            'gold' => $data['gold'],
        ]);

        return redirect()->route('admin.inventory.index');
    }
}
