<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAbility extends Model
{
    protected $table = 'type_abilities';
    protected $guarded = false;

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_type_abilities');
    }

    public function rices()
    {
        return $this->belongsToMany(Race::class, 'type_ability_races');
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'type_ability_grades');
    }

    public function cubes()
    {
        return $this->belongsToMany(Cube::class, 'type_ability_cubes');
    }
}
