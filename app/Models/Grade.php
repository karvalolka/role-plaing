<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';
    protected $guarded = false;


    public function abilities()
    {
        return $this->belongsToMany(Ability::class, 'ability_grades');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skills_grades');
    }

    public function chars()
    {
        return $this->hasMany(Char::class);
    }
}
