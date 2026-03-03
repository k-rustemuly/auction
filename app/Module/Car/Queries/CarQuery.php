<?php

declare(strict_types=1);

namespace App\Module\Car\Queries;

use App\Models\Car;
use App\Module\Car\DTO\CarShowDTO;
use App\Traits\HasCachedDictionaries;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;

final class CarQuery
{
    use HasCachedDictionaries;

    public function getAllPaginated(CarShowDTO $DTO): LengthAwarePaginator
    {
        $query = QueryBuilder::for(Car::class)
            ->allowedFilters(['status_id', 'mark_id', 'car_model_id'])
            ->allowedSorts(['id', 'created_at'])
            ->defaultSort('-created_at')
            ->paginate($DTO->limit, ['*'], 'page', $DTO->page)
            ->appends(request()->query());

        return $this->hydrateFromCache($query, [
            'status',
            'mark',
            'carModel',
            'engineType',
            'transmissonType',
            'color',
            'region'
        ]);
    }
}
