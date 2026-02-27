<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarSaveRequest;
use App\Models\Car;
use App\Models\Trade;

class CarController extends Controller
{
    public function save(Trade $trade, CarSaveRequest $request)
    {
        $trade->car()->updateOrCreate(
            ['trade_id' => $trade->id],
            $request->validated()
        );

        return back();
    }
}
