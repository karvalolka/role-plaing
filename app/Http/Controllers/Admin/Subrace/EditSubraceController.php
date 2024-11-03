<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Subrace;

class EditSubraceController extends Controller
{
    public function __invoke(Subrace $subrace)
    {

        return view('admin.subrace.edit', compact('subrace'));
    }
}
