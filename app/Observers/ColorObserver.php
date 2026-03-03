<?php

namespace App\Observers;

class ColorObserver extends BaseDictionaryObserver
{
    protected function getCacheKey(): string
    {
        return 'all_colors';
    }
}
