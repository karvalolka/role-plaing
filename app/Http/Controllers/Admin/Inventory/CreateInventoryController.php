<?php

namespace App\Http\Controllers\Admin\Inventory;

use App\Http\Controllers\Controller;

class CreateInventoryController extends Controller
{
    public function __invoke()
    {
        return view('admin.inventory.create');
    }
}
