<?php

namespace App\Http\Controllers\Admin\Mechanic;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;

class DeleteMechanicController extends Controller
{
    public function __invoke(Mechanic $mechanic)
    {
        $mechanic->delete();
        return redirect()->route('admin.mechanic.index');
    }
}
