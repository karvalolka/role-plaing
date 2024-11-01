<?php

namespace App\Http\Controllers\Admin\Mechanic;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;
use App\Models\Mechanic;
use Illuminate\Http\Request;

class StoreMechanicController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'types' => 'required|string',
            'conditions' => 'required|string',
        ]);
        Mechanic::firstOrCreate($data);
        return redirect()->route('admin.mechanic.index');
    }
}
