<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cube extends Model
{
    protected $table = 'cubes';
    protected $guarded = false;

    public function typeAbilities()
    {
        return $this->belongsToMany(TypeAbility::class, 'type_ability_cubes', 'cubes_id', 'type_ability_id');
    }
}
