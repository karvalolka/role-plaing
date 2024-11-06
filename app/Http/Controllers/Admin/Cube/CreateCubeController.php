<?php

namespace App\Http\Controllers\Admin\Cube;

use App\Http\Controllers\Controller;

class CreateCubeController extends Controller
{
    public function __invoke()
    {
        return view('admin.cube.create');
    }
}
