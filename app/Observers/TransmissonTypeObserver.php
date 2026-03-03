<?php

namespace App\Observers;

class TransmissonTypeObserver extends BaseDictionaryObserver
{
    protected function getCacheKey(): string
    {
        return 'all_transmisson_type';
    }
}
