<?php

namespace App\Observers;

class RegionObserver extends BaseDictionaryObserver
{
    protected function getCacheKey(): string
    {
        return 'all_regions';
    }
}
