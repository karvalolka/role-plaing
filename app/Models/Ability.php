<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $table = 'abilities';
    protected $guarded = false;

    public function typeAbilities()
    {
        return $this->belongsToMany(TypeAbility::class, 'ability_type_abilities', 'ability_id', 'type_abilities_id');
    }
    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'ability_grades', 'ability_id', 'grade_id')
            ->withTimestamps();
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'ability_races', 'ability_id', 'race_id')
            ->withTimestamps();
    }

    public function cubes()
    {
        return $this->belongsToMany(Cube::class, 'ability_cubes', 'ability_id', 'cube_id')
            ->withTimestamps();
    }
}
