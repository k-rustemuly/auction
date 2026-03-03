<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

abstract class BaseDictionaryObserver
{
    abstract protected function getCacheKey(): string;

    public function saved($model): void
    {
        $this->clear($model);
    }

    public function deleted($model): void
    {
        $this->clear($model);
    }

    protected function clear($model): void
    {
        Cache::forget($this->getCacheKey());
    }
}

