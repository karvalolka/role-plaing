<?php

namespace App\Http\Controllers\Admin\Cube;

use App\Http\Controllers\Controller;
use App\Models\Cube;
use Illuminate\Http\Request;

class UpdateCubeController extends Controller
{
    public function __invoke(Request $request, Cube $cube)
    {
        $data = $request->validate([
            'name' => 'required|integer',
            'icon_svg' => 'nullable|string',
        ]);
        $cube->update($data);
        $cubes = Cube::all();

        return view('admin.cube.index', compact('cube', 'cubes'));
    }
}
