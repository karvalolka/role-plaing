<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory;

class DeleteInventoryController extends Controller
{
    public function __invoke(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('admin.inventory.index');
    }
}
