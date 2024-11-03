<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use Illuminate\Http\Request;

class StoreAbilityController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'condition' => 'array',
            'description' => 'required|string',
            'class_race' => 'required|in:class,race,other',
            'cube' => 'nullable|array',
        ]);

        $conditions = [];
        if (!empty($request['condition'])) {
            foreach ($request['condition'] as $value) {
                switch ($value) {
                    case 1:
                        $conditions[] = Ability::CUBE_ONE;
                        break;
                    case 2:
                        $conditions[] = Ability::CUBE_TWO;
                        break;
                    case 3:
                        $conditions[] = Ability::CUBE_THREE;
                        break;
                    case 4:
                        $conditions[] = Ability::CUBE_FOUR;
                        break;
                    case 5:
                        $conditions[] = Ability::CUBE_FIVE;
                        break;
                    case 6:
                        $conditions[] = Ability::CUBE_SIX;
                        break;
                }
            }
        }

        Ability::firstOrCreate([
            'name' => $request['name'],
            'class_race' => $request['class_race'],
            'condition' => json_encode($request['condition']),
            'description' => $request['description'],
        ]);
        return redirect()->route('admin.ability.index');
    }
}
