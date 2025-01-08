<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class StoreGradeController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'icon_svg' => 'nullable|string',
        ]);

        Grade::firstOrCreate($data);
        return redirect()->route('admin.grade.index');
    }
}
