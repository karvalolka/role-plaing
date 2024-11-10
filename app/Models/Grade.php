<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';
    protected $guarded = false;

    public function subgrades()
    {
        return $this->hasMany(Subgrade::class, 'grade_id');
    }

    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_grades');
    }
}
