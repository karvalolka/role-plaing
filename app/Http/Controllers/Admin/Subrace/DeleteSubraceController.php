<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Subrace;

class DeleteSubraceController extends Controller
{
    public function __invoke(Subrace $subrace)
    {
        $subrace->delete();
        return redirect()->route('admin.subrace.index');
    }
}
