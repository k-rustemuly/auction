<?php

namespace App\Observers;

use App\Models\Car;

class CarObserver
{
    /**
     * Handle the Car "created" event.
     */
    public function creating(Car $car): void
    {
        $trade                          = $car->trade;
        $car->status_id                 = $trade->status_id;
        $car->region_id                 = $trade->region_id;
        $car->is_method_auc_down        = $trade->isMethodAucDown;
        $car->initial_contract_price    = $trade->initialContractPrice;
        $car->min_contract_price        = $trade->minContractPrice;
        $car->assurance_amount          = $trade->assuranceAmount;
        $car->purchased_price           = $trade->purchasePrice;
        $car->thumbnail                 = $trade->thumbnail;
        $car->registered_date           = $trade->registeredDate;
        $car->bid_submission_end_date   = $trade->bidSubmissionEndDate;
        $car->start_date                = $trade->tradeStartDate;

        $car->vin                       = strtoupper($car->vin);

        $title_ru = [];
        $title_kk = [];
        if ($car->engine_capacity) {
            $title_ru[] = __('moonshine::ui.engine_capacity', ['engine_capacity' => $car->engine_capacity], 'ru');
            $title_kk[] = __('moonshine::ui.engine_capacity', ['engine_capacity' => $car->engine_capacity], 'kk');
        }

        if ($car->engine_type_id) {
            $title_ru[] = $car->engineType->name_ru;
            $title_kk[] = $car->engineType->name_kk;
        }

        if ($car->transmisson_type_id) {
            $title_ru[] = __('moonshine::ui.transmisson_type', ['transmisson_type' => $car->transmissonType->name_ru], 'ru');
            $title_kk[] = __('moonshine::ui.transmisson_type', ['transmisson_type' => $car->transmissonType->name_kk], 'kk');
        }

        if ($car->mileage) {
            $title_ru[] = __('moonshine::ui.mileage', ['mileage' => mileage($car->mileage)], 'ru');
            $title_kk[] = __('moonshine::ui.mileage', ['mileage' => mileage($car->mileage)], 'kk');
        }

        if($car->color_id) {
            $title_ru[] = $car->color->name_ru;
            $title_kk[] = $car->color->name_kk;
        }

        if($car->vin) {
            $title_ru[] = $title_kk[] = $car->vin;
        }

        $car->title_ru = strtoupper(implode(', ', $title_ru));
        $car->title_kk = strtoupper(implode(', ', $title_kk));
    }

    public function created(Car $car): void
    {
        $car->trade->isProcessed = true;
        $car->trade->saveQuietly();
    }
}
