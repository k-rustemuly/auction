<?php

namespace App\Models;

use App\Observers\RegionObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([RegionObserver::class])]
class Region extends LocalizableModel
{
    protected $fillable = [
        'code',
        'name_kk',
        'name_ru',
    ];
}
