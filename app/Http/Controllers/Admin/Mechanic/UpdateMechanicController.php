<?php

namespace App\Http\Controllers\Admin\Mechanic;

use App\Http\Controllers\Controller;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class UpdateMechanicController extends Controller
{
    public function __invoke(Request $request, Mechanic $mechanic)
    {
        $data = $request->validate([
            'types' => 'required|string',
            'conditions' => 'required|string',
        ]);
        $mechanic->update($data);
        $mechanics = Mechanic::all();

        return view('admin.mechanic.index', compact('mechanic', 'mechanics'));
    }
}
