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
    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'ability_grades', 'ability_id', 'grade_id');
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'ability_races', 'ability_id', 'race_id');
    }

    public function cubes()
    {
        return $this->belongsToMany(Cube::class, 'ability_cubes', 'ability_id', 'cube_id');
    }
}
