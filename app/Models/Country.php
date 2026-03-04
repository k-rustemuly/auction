<?php

namespace App\Models;

class Country extends LocalizableModel
{
    protected $fillable = [
        'name_kk',
        'name_ru',
        'name_en',
    ];
}
