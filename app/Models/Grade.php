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

    public function typeAbilities()
    {
        return $this->belongsToMany(TypeAbility::class, 'type_ability_grades');
    }
}