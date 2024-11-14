<?php

namespace App\Http\Controllers\Admin\Patch;

use App\Http\Controllers\Controller;
use App\Models\Patch;

class PatchController extends Controller
{
    public function __invoke()
    {
        $patches = Patch::orderBy('created_at', 'desc')->get();
        return view('admin.patch.index', compact('patches'));
    }
}
