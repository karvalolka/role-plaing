<?php

namespace App\Http\Controllers\Admin\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;

class DeleteCharController extends Controller
{
    public function __invoke(Char $char)
    {
        $char->delete();
        return redirect()->route('admin.char.index');
    }
}
