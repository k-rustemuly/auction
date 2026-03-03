<?php

namespace App\Models;

use App\Observers\EngineTypeObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([EngineTypeObserver::class])]
class EngineType extends LocalizableModel
{
    protected $fillable = [
        'name_kk',
        'name_ru',
    ];
}
