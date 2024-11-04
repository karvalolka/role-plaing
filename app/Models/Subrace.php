<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subrace extends Model
{
    protected $table = 'subraces';
    protected $guarded = false;

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

}
