<?php

namespace App\Http\Controllers\Admin\Patch;

use App\Http\Controllers\Controller;
use App\Models\Patch;
use Illuminate\Http\Request;

class UpdatePatchController extends Controller
{
    public function __invoke(Request $request, Patch $patch)
    {
        $data = $request->validate([
            'number' => 'required|string',
            'description' => 'required|string',
        ]);
        $patch->update($data);
        $patches = Patch::all();

        return view('admin.patch.index', compact('patch', 'patches'));
    }
}
