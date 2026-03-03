<?php

namespace App\Observers;

class StatusObserver extends BaseDictionaryObserver
{
    protected function getCacheKey(): string
    {
        return 'all_statuses';
    }
}
