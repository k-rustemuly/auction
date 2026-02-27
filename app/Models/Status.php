<?php

namespace App\Models;

class Status extends LocalizableModel
{
    protected $fillable = [
        'code',
        'name_kk',
        'name_ru',
    ];

    public const BID_SUBMISSION = 1;

    public const ACTIVE = 2;

    public const CONSIDERATION = 3;

    public const AFTER_TRADE = 4;

    public const COMPLETED = 5;

    public const CANCELED = 6;

    public const NOT_COMPLETED = 7;

}
