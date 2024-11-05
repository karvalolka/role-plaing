<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class UpdateGradeController extends Controller
{
    public function __invoke(Request $request, Grade $garde)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $garde->update($data);
        $gardes = Grade::all();
        return redirect()->route('admin.garde.index', compact('gardes'));
    }
}
