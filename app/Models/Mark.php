<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mark extends Model
{
    protected $fillable = [
        'kolesa_id',
        'name',
        'is_popular',
    ];

    protected $casts = [
        'is_popular' => 'boolean',
    ];

    public function carModels(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
