<?php

namespace App\Models;

use App\Observers\ColorObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([ColorObserver::class])]
class Color extends LocalizableModel
{
    protected $fillable = [
        'name_kk',
        'name_ru',
    ];
}
