<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Char extends Model
{
    protected $table = 'chars';
    protected $guarded = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function freePoints()
    {
        return $this->belongsToMany(FreePoint::class, 'char_free_point', 'char_id', 'free_point_id')
            ->withPivot('quantity');
    }


}
