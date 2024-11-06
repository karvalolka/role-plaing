<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAbility extends Model
{
    protected $table = 'type_ability';
    protected $guarded = false;

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_type_abilities');
    }
}
