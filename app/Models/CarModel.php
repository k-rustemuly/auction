<?php

namespace App\Models;

use App\Observers\CarModelObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy([CarModelObserver::class])]
class CarModel extends Model
{
    protected $fillable = [
        'mark_id',
        'name',
        'is_popular',
    ];

    protected $casts = [
        'is_popular' => 'boolean',
    ];

    public function mark(): BelongsTo
    {
        return $this->belongsTo(Mark::class);
    }
}
