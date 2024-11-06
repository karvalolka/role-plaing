<?php

namespace App\Http\Controllers\Admin\Cube;

use App\Http\Controllers\Controller;
use App\Models\Cube;

class EditCubeController extends Controller
{
    public function __invoke(Cube $cube)
    {
        return view('admin.cube.edit', compact('cube'));
    }
}
