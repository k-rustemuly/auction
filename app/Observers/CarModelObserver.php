<?php

namespace App\Observers;

class CarModelObserver extends BaseDictionaryObserver
{
    protected function getCacheKey(): string
    {
        return 'all_car_models';
    }
}
