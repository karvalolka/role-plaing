<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $table = 'abilities';
    protected $guarded = false;

    const CUBE_ONE = 1;
    const CUBE_TWO = 2;
    const CUBE_THREE = 3;
    const CUBE_FOUR = 4;
    const CUBE_FIVE = 5;
    const CUBE_SIX = 6;

    public static function getConditionName($value)
    {
        switch ($value) {
            case '1':
                return '1';
            case '2':
                return '2';
            case '3':
                return '3';
            case '4':
                return '4';
            case '5':
                return '5';
            case '6':
                return '6';
            default:
                return 'Неизвестное значение';
        }
    }
}
