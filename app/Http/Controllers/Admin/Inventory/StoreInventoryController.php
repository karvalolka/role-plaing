<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Lore;
use Illuminate\Http\Request;

class StoreInventoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'cube' => 'required|integer|min:1|max:6',
            'structure' => 'required|string',
        ]);
        Inventory::firstOrCreate($data);
        return redirect()->route('admin.inventory.index');
    }
}