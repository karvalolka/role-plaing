<?php

namespace App\Http\Controllers\Admin\Subgrade;

use App\Http\Controllers\Controller;
use App\Models\Subgrade;
use Illuminate\Http\Request;

class UpdateSubgradeController extends Controller
{
    public function __invoke(Request $request, Subgrade $subgrade)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'grade_id' => 'required|exists:grades,id'
        ]);
        $subgrade->update($data);
        $subgrades = Subgrade::all();

        return view('admin.subgrade.index', compact('subgrade', 'subgrades'));
    }
}
