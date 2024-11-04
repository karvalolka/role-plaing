<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Subrace;

class SubraceController extends Controller
{
    public function __invoke()
    {
        $subraces = Subrace::with('race')->get();
        return view('admin.subrace.index', compact('subraces'));
    }
}
