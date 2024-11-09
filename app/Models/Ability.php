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
        return $this->hasManyThrough(Grade::class, TypeAbility::class, 'ability_id', 'type_ability_id', 'id', 'id');
    }
}
