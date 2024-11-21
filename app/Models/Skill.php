<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    protected $guarded = false;

    public function grades()
    {
        return $this->belongsToMany(Grade::class, 'skills_grades');
    }
}
