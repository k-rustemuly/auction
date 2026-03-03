<?php

namespace App\Module\Car\Services;

use App\Module\Car\DTO\CarShowDTO;
use App\Module\Car\Queries\CarQuery;
use Illuminate\Pagination\LengthAwarePaginator;

final class CarsService
{

    public function __construct(
        private readonly CarQuery $query,
    ) {
    }

    public function getAllPaginated(CarShowDTO $DTO): LengthAwarePaginator
    {
        return $this->query->getAllPaginated($DTO);
    }
}
