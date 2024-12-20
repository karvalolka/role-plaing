<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreePoint extends Model
{
    protected $table = 'free_points';
    protected $guarded = false;

    public function char()
    {
        return $this->belongsToMany(Char::class, 'char_free_point', 'free_point_id', 'char_id')
            ->withPivot('quantity');
    }

}
