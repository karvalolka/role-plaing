<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Subrace;
use Illuminate\Http\Request;

class UpdateSubraceController extends Controller
{
    public function __invoke(Request $request, Subrace $subrace)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'race_id' => 'required|exists:races,id'
        ]);
        $subrace->update($data);
        $subraces = Subrace::all();

        return view('admin.subrace.index', compact('subrace', 'subraces'));
    }
}
