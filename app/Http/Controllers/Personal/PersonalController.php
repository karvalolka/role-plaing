<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Char;

class PersonalController extends Controller
{
    public function __invoke($id)
    {
        $chars = Char::findOrFail($id);
        return view('personal.show', compact('chars'));
    }
}
