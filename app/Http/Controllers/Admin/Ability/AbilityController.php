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
                // Декодируем условие и преобразуем его в массив
                $conditions = json_decode($ability->condition, true) ?? [];
                return implode(',', $conditions); // Или используйте другой метод для группировки
            });
        });
        return view('admin.ability.index', compact('abilities', 'groupedAbilities'));
    }
}
