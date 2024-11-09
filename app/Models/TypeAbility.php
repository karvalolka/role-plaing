<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAbility extends Model
{
    protected $table = 'type_abilities';
    protected $guarded = false;

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_type_abilities', 'type_abilities_id', 'ability_id');
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'type_ability_races', 'type_ability_id', 'races_id');
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'type_ability_grades', 'type_ability_id', 'grades_id');
    }

    public function cubes()
    {
        return $this->belongsToMany(Cube::class, 'type_ability_cubes', 'type_ability_id', 'cubes_id');
    }
}
