<?php

namespace App\Observers;

class EngineTypeObserver extends BaseDictionaryObserver
{
    protected function getCacheKey(): string
    {
        return 'all_engine_types';
    }
}
