<?php

declare(strict_types=1);

namespace App\Module\Car\DTO;

use App\Module\Car\Requests\CarListRequest;

final class CarShowDTO
{
    public int $limit;
    public int $page;

    public static function fromRequest(CarListRequest $request): CarShowDTO
    {
        $self          = new self();
        $self->limit   = (int) $request->input('limit', 20);
        $self->page    = (int) $request->input('page', 1);

        return $self;
    }
}
