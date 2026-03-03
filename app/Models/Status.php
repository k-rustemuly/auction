<?php

namespace App\Models;

use App\Observers\StatusObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([StatusObserver::class])]
class Status extends LocalizableModel
{
    protected $fillable = [
        'code',
        'name_kk',
        'name_ru',
    ];

    /** @var int Прием заявок */
    public const BID_SUBMISSION = 1;

    /** @var int На торгах */
    public const ACTIVE = 2;

    /** @var int Допуск на торги */
    public const CONSIDERATION = 3;

    /** @var int Подведение итогов */
    public const AFTER_TRADE = 4;

    /** @var int Состоявшиеся торги */
    public const COMPLETED = 5;

    /** @var int Отмененные торги */
    public const CANCELED = 6;

    /** @var int Несостоявшиеся торги */
    public const NOT_COMPLETED = 7;

}
