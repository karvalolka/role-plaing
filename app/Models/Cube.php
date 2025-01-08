<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cube extends Model
{
    protected $table = 'cubes';
    protected $guarded = false;

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_cubes');
    }
    public function inventory()
{
    return $this->hasOne(Inventory::class);
}
}
