<?php

namespace App\Models;

class Category extends LocalizableModel
{
    protected $fillable = [
        'code',
        'name_kk',
        'name_ru',
        'discount'
    ];

    public const PASSENGER_CARS = 24;
}
