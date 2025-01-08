<?php

namespace App\Http\Controllers\Admin\Cube;

use App\Http\Controllers\Controller;
use App\Models\Cube;
use Illuminate\Http\Request;

class StoreCubeController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|integer',
            'icon_svg' => 'nullable|string',
        ]);
        Cube::firstOrCreate($data);
        return redirect()->route('admin.cube.index');
    }

}
