<?php

namespace App\Models;

use App\Observers\TransmissonTypeObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([TransmissonTypeObserver::class])]
class TransmissonType extends LocalizableModel
{
    protected $fillable = [
        'name_kk',
        'name_ru',
    ];
}
