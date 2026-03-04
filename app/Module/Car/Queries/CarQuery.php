<?php

declare(strict_types=1);

namespace App\Module\Car\Queries;

use App\Models\Car;
use App\Module\Car\DTO\CarShowDTO;
use App\Traits\HasCachedDictionaries;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\Enums\FilterOperator;
use Spatie\QueryBuilder\QueryBuilder;

final class CarQuery
{
    use HasCachedDictionaries;

    public function getAllPaginated(CarShowDTO $DTO): LengthAwarePaginator
    {
        $query = QueryBuilder::for(Car::class)
            ->allowedFilters([
                'status_id',
                'mark_id',
                'car_model_id',
                AllowedFilter::exact('is_method_auc_down'),
                AllowedFilter::exact('from_initial_contract_price', 'initial_contract_price')->operator('initial_contract_price', FilterOperator::GREATER_THAN_OR_EQUAL),
                AllowedFilter::exact('to_initial_contract_price', 'initial_contract_price')->operator('initial_contract_price', FilterOperator::LESS_THAN_OR_EQUAL),
            ])
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
