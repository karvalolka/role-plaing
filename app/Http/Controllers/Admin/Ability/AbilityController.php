<?php

namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;

class AbilityController extends Controller
{
    public function __invoke()
    {
        $abilities = Ability::all();
        $groupedAbilities = $abilities->groupBy('class_race');
        $groupedAbilities = $groupedAbilities->map(function ($group) {
            return $group->groupBy(function ($ability) {

                $conditions = json_decode($ability->condition, true) ?? [];
                return implode(',', $conditions);
            });
        });
        return view('admin.ability.index', compact('abilities', 'groupedAbilities'));
    }
}
