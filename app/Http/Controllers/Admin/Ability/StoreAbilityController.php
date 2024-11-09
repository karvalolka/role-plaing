<?php
namespace App\Http\Controllers\Admin\Ability;

use App\Http\Controllers\Controller;
use App\Models\Ability;
use Illuminate\Http\Request;

class StoreAbilityController extends Controller
{
    public function __invoke(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'type_ability' => 'required|array',
            'type_ability.*' => 'exists:type_abilities,id',
            'class_id' => 'nullable|array',
            'class_id.*' => 'exists:grades,id',
            'race_id' => 'nullable|array',
            'race_id.*' => 'exists:races,id',
            'condition' => 'nullable|array',
            'condition.*' => 'exists:cubes,id',
        ]);

        $ability = Ability::firstOrCreate(
            ['name' => $validatedData['name']],
            ['description' => $validatedData['description']]
        );


        $ability->typeAbilities()->sync($validatedData['type_ability']);

        if (isset($validatedData['class_id'])) {
            foreach ($validatedData['class_id'] as $classId) {
                $ability->typeAbilities()->each(function($typeAbility) use ($classId) {
                    $typeAbility->grades()->sync([$classId]);
                });
            }
        }

        if (isset($validatedData['race_id'])) {
            foreach ($validatedData['race_id'] as $raceId) {
                $ability->typeAbilities()->each(function($typeAbility) use ($raceId) {
                    $typeAbility->races()->sync([$raceId]);
                });
            }
        }

        if (isset($validatedData['condition'])) {
            foreach ($validatedData['condition'] as $cubeId) {
                $ability->typeAbilities()->each(function($typeAbility) use ($cubeId) {
                    $typeAbility->cubes()->sync([$cubeId]);
                });
            }
        }

        return redirect()->route('admin.ability.index');
    }
}
