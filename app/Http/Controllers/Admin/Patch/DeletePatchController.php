<?php

namespace App\Http\Controllers\Admin\Patch;

use App\Http\Controllers\Controller;
use App\Models\Patch;

class DeletePatchController extends Controller
{
    public function __invoke(Patch $patch)
    {
        $patch->delete();
        return redirect()->route('admin.patch.index');
    }
}
