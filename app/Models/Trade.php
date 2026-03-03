<?php

namespace App\Models;

use App\Observers\TradeObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ObservedBy([TradeObserver::class])]
class Trade extends LocalizableModel
{
    protected $fillable = [
        'uid',
        'link',
        'isMethodAucDown',
        'title_kk',
        'title_ru',
        'initialContractPrice',
        'minContractPrice',
        'assuranceAmount',
        'purchasePrice',
        'description_kk',
        'description_ru',
        'category_id',
        'thumbnail',
        'registeredDate',
        'dateModified',
        'bidSubmissionEndDate',
        'tradeStartDate',
        'status_id',
        'region_id',
        'isProcessed',
        'images',
        'documents',
    ];

    protected $localizable = ['title', 'description'];

    protected function casts(): array
    {
        return [
            'isMethodAucDown' => 'boolean',
            'registeredDate' => 'datetime',
            'dateModified' => 'datetime',
            'bidSubmissionEndDate' => 'datetime',
            'tradeStartDate' => 'datetime',
            'isProcessed' => 'boolean',
            'images' => 'array',
            'documents' => 'array',
        ];
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function getInitialContractPriceFormattedAttribute($value): string
    {
        return money($this->initialContractPrice);
    }

    public function getMinContractPriceFormattedAttribute($value): string
    {
        return money($this->minContractPrice);
    }

    public function getAssuranceAmountFormattedAttribute($value): string
    {
        return money($this->assuranceAmount);
    }

    public function getPurchasePriceFormattedAttribute($value): string
    {
        return money($this->purchasePrice);
    }

    public function car(): HasOne
    {
        return $this->hasOne(Car::class);
    }
}
