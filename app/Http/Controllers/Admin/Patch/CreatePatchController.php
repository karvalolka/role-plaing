<?php

namespace App\Http\Controllers\Admin\Patch;

use App\Http\Controllers\Controller;

class CreatePatchController extends Controller
{
    public function __invoke()
    {
        return view('admin.patch.create');
    }
}
