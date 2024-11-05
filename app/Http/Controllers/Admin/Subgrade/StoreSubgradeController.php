<?php

namespace App\Http\Controllers\Admin\Subgrade;

use App\Http\Controllers\Controller;
use App\Models\Subgrade;
use Illuminate\Http\Request;

class StoreSubgradeController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'grade_id' => 'required|exists:grades,id'
        ]);
        Subgrade::firstOrCreate($data);
        return redirect()->route('admin.subgrade.index');
    }
}
