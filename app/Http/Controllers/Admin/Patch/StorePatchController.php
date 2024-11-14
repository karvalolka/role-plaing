<?php

namespace App\Http\Controllers\Admin\Patch;

use App\Http\Controllers\Controller;
use App\Models\Patch;
use Illuminate\Http\Request;
class StorePatchController extends Controller
{
    public function __invoke(Request $request){
        $data = $request->validate([
            'number' => 'required|string',
            'description' => 'required|string',
        ]);
        Patch::firstOrCreate($data);
        return redirect()->route('admin.patch.index');
    }
}
