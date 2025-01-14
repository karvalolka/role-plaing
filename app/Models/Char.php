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

    protected static function booted()
    {
        static::creating(function ($char) {
            $char->hp = $char->calculateHp();
            if ($char->intelligence > $char->agility){
                $char->mpSm = $char->calculateMp();
            } else {
                $char->mpSm = $char->calculateSm();
            }
        });

        static::saving(function ($char) {
            $char->hp = $char->calculateHp();
            if ($char->intelligence > $char->agility){
                $char->mpSm = $char->calculateMp();
            } else {
                $char->mpSm = $char->calculateSm();
            }
        });
    }

    // Метод для получения модификатора характеристики
    public function getModifier($value)
    {
        switch ($value) {
            case 1:
                return -2;
            case 2:
                return -1;
            case 3:
                return 0;
            case 4:
                return 1;
            case 5:
                return 1;
            case 6:
                return 2;
            case 7:
                return 2;
            case 8:
                return 3;
            case 9:
                return 3;
            default:
                return 0;
        }
    }

    // Метод для вычисления HP
    public function calculateHp()
    {
        $strengthModifier = $this->getModifier($this->strength);
        $staminaModifier = $this->getModifier($this->stamina);

        return ($strengthModifier + $staminaModifier + 1) * 4;
    }

    // Метод для вычисления MP
    public function calculateMp()
    {
        $intelligenceModifier = $this->getModifier($this->intelligence);
        $fortitudeModifier = $this->getModifier($this->fortitude);

        return ($intelligenceModifier + $fortitudeModifier + 1) * 4;
    }

    // Метод для вычисления SM
    public function calculateSm()
    {
        $agilityModifier = $this->getModifier($this->agility);
        $staminaModifier = $this->getModifier($this->stamina);

        return ($agilityModifier + $staminaModifier + 1) * 4;
    }


}
