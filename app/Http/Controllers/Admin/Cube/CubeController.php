<?php

namespace App\Http\Controllers\Admin\Cube;

use App\Http\Controllers\Controller;
use App\Models\Cube;

class CubeController extends Controller
{
    public function __invoke()
    {
        $cubes = Cube::all();
        return view('admin.cube.index', compact('cubes'));
    }
}
