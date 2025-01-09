<?php

namespace App\Http\Controllers\Personal\Char;

use App\Http\Controllers\Controller;
use App\Models\Char;

class DeleteCharController extends Controller
{
    public function __invoke(Char $char)
    {
        $char->delete();
        return redirect()->route('personal.char.index');
    }
}
