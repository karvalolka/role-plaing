<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;
use Illuminate\Http\Request;

class StoreFreePointController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'points' => 'required|integer',
            'type' => 'required|in:name,gold',
            'name' => ['required_if:type,name', 'nullable', 'string'],
            'gold' => ['required_if:type,gold', 'nullable', 'numeric', 'min:0'],
        ]);

        if ($data['type'] == 'name') {
            $freePointData = [
                'name' => $data['name'],
                'points' => $data['points'],
                'gold' => null,
            ];
        } elseif ($data['type'] == 'gold') {
            $freePointData = [
                'name' => null,
                'points' => $data['points'],
                'gold' => $data['gold'],
            ];
        }

        FreePoint::firstOrCreate($freePointData);
        return redirect()->route('admin.freePoint.index');
    }
}
