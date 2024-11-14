<?php

namespace App\Http\Controllers\Admin\Patch;

use App\Http\Controllers\Controller;
use App\Models\Patch;

class EditPatchController extends Controller
{
    public function __invoke(Patch $patch)
    {
        return view('admin.patch.edit', compact('patch'));
    }
}
