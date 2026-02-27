<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends LocalizableModel
{
    protected $localizable = [
        'title',
        'description'
    ];

    protected $fillable = [
        'trade_id',
        'status_id',
        'region_id',
        'mark_id',
        'car_model_id',
        'year',
        'mileage',
        'engine_capacity',
        'engine_type_id',
        'transmisson_type_id',
        'color_id',
        'vin',
        'is_method_auc_down',
        'title_kk',
        'title_ru',
        'initial_contract_price',
        'min_contract_price',
        'assurance_amount',
        'purchased_price',
        'thumbnail',
        'registered_date',
        'bid_submission_end_date',
        'start_date',
        'viewed_count',
        'added_to_favorites_count',
    ];

    protected function casts(): array
    {
        return [
            'is_method_auc_down' => 'boolean',
            'registered_date' => 'datetime',
            'bid_submission_end_date' => 'datetime',
            'start_date' => 'datetime',
        ];
    }

    public function trade(): BelongsTo
    {
        return $this->belongsTo(Trade::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function mark(): BelongsTo
    {
        return $this->belongsTo(Mark::class);
    }

    public function carModel(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    public function engineType(): BelongsTo
    {
        return $this->belongsTo(EngineType::class);
    }

    public function transmissonType(): BelongsTo
    {
        return $this->belongsTo(TransmissonType::class);
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
}
