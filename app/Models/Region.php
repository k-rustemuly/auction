<?php

namespace App\Models;

class Region extends LocalizableModel
{
    protected $fillable = [
        'code',
        'name_kk',
        'name_ru',
    ];
}
