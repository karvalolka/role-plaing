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
        ]);

        if ($data['type'] == 'name' && $data['gold'] !== null) {
            return back()->withErrors(['gold' => 'Поле золота должно быть пустым, если выбран тип "Имя".']);
        }

        if ($data['type'] == 'gold' && $data['name'] !== null) {
            return back()->withErrors(['name' => 'Поле имени должно быть пустым, если выбран тип "Золото".']);
        }

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

        $freePoint->update($freePointData);

        $freePoints = FreePoint::all();
        $groupedFreePoints = $freePoints->groupBy('points');

        return view('admin.freePoint.index', compact('freePoint', 'freePoints', 'groupedFreePoints'));
    }
}
