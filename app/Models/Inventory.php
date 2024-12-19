<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';
    protected $guarded = false;

    public function chars()
    {
        return $this->hasMany(Char::class);
    }
}
