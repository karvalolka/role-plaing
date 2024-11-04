<?php

namespace App\Http\Controllers\Admin\Subrace;

use App\Http\Controllers\Controller;
use App\Models\Subrace;
use Illuminate\Http\Request;

class StoreSubraceController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'race_id' => 'required|exists:races,id'
        ]);
        Subrace::firstOrCreate($data);
        return redirect()->route('admin.subrace.index');
    }
}
