<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';
    protected $guarded = false;

    public function subraces()
    {
        return $this->hasMany(Subrace::class, 'race_id');
    }}