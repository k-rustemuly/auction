<?php

namespace App\Observers;


class MarkObserver extends BaseDictionaryObserver
{
    protected function getCacheKey(): string
    {
        return 'all_marks';
    }
}
