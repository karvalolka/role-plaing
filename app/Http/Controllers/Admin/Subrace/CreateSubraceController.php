<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;

class CreateSubraceController extends Controller
{
    public function __invoke()
    {
        return view('admin.subrace.create');
    }
}
