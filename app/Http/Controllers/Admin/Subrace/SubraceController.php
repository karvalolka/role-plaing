<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Subrace;

class SubraceController extends Controller
{
    public function __invoke()
    {
        $subraces = Subrace::all();
        return view('admin.subrace.index', compact('subraces'));
    }
}
