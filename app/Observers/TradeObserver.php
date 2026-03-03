<?php

namespace App\Observers;

use App\Models\Status;
use App\Models\Trade;
use App\Module\Etp\Services\EtpService;
use Illuminate\Support\Facades\Storage;

class TradeObserver
{

    /**
     * Handle the Trade "updated" event.
     */
    public function updating(Trade $trade): void
    {
        if ($trade->isDirty('category_id') && !is_null($trade->category_id)) {
            $category = $trade->category;
            if ($trade->isMethodAucDown) {
                $discount = (float) $category->discount;

                $initialPrice = (float) $trade->initialContractPrice;
                $minContractPrice = $initialPrice - ($initialPrice * ($discount / 100));

                $trade->minContractPrice = round($minContractPrice, 2);
            } else {
                $trade->minContractPrice = $trade->initialContractPrice;
            }

        }

        if ($trade->isDirty('status_id')
            && in_array($trade->status_id, [
                Status::COMPLETED,
                Status::CANCELED,
                Status::NOT_COMPLETED
            ])
            && is_array($trade->documents)
            && !empty($trade->documents)
        )
        {
            foreach($trade->documents as $document) {
                if (Storage::disk('public')->exists($document['url'])) {
                    logger($document['url']);
                    Storage::disk('public')->delete($document['url']);
                }
            }
            $trade->documents = null;
        }
    }

    public function updated(Trade $trade) {
        if($trade->wasChanged('category_id')) {
            EtpService::saveFiles($trade);
        }

        if((
            $trade->wasChanged('status_id') || $trade->wasChanged('purchased_price')
        )
            && $car = $trade->car
        ) {
            $car->status_id = $trade->status_id;
            $car->save();
        }
    }

}
