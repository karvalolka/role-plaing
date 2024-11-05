<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subgrade extends Model
{
    protected $table = 'subgrades';
    protected $guarded = false;

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
