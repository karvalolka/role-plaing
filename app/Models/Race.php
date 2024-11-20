<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';
    protected $guarded = false;

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_races');
    }
}
