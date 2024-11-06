<?php

namespace App\Http\Controllers\Admin\Cube;

use App\Http\Controllers\Controller;
use App\Models\Cube;

class DeleteCubeController extends Controller
{
    public function __invoke(Cube $cube)
    {
        $cube->delete();
        return redirect()->route('admin.cube.index');
    }
}
