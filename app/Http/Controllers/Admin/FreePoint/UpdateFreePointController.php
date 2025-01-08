<?php

namespace App\Http\Controllers\Admin\FreePoint;

use App\Http\Controllers\Controller;
use App\Models\FreePoint;
use Illuminate\Http\Request;

class UpdateFreePointController extends Controller
{
    public function __invoke(Request $request, FreePoint $freePoint)
    {
        $data = $request->validate([
            'points' => 'required|integer',
            'type' => 'required|in:name,gold',
            'name' => ['required_if:type,name', 'nullable', 'string'],
            'gold' => ['required_if:type,gold', 'nullable', 'numeric', 'min:0'],
            'icon_svg' => 'nullable|string',
        ]);

        if ($data['type'] == 'name') {
            $freePointData = [
                'name' => $data['name'],
                'points' => $data['points'],
                'gold' => 0,
                'icon_svg' => $data['icon_svg'] ?? null,
            ];
        }
        elseif ($data['type'] == 'gold') {
            $freePointData = [
                'name' => null,
                'points' => $data['points'],
                'gold' => $data['gold'],
                'icon_svg' => $data['icon_svg'] ?? null,
            ];
        }

        $freePoint->update($freePointData);

        $freePoints = FreePoint::all();
        $groupedFreePoints = $freePoints->groupBy('points');

        return view('admin.freePoint.index', compact('freePoint', 'freePoints', 'groupedFreePoints'));
    }
}
