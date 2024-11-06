<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $table = 'abilities';
    protected $guarded = false;

    public function classRaceOthers()
    {
        return $this->belongsToMany(TypeAbility::class, 'ability_type_abilities');
    }
}
