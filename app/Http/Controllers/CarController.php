<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarSaveRequest;
use App\Models\Trade;
use App\Module\Car\Requests\CarListRequest;
use App\Module\Car\Resources\CarsResource;
use App\Module\Car\Services\CarsService;

final class CarController extends Controller
{
    public function __construct(private readonly CarsService $service)
    {
    }

    public function save(Trade $trade, CarSaveRequest $request)
    {
        $trade->car()->updateOrCreate(
            ['trade_id' => $trade->id],
            $request->validated()
        );

        return back();
    }

    public function list(CarListRequest $request): CarsResource
    {
        return new CarsResource(
            $this->service->getAllPaginated($request->getDTO())
        );
    }
}
