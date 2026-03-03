<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

trait HasCachedDictionaries
{
    /**
     *
     * @param LengthAwarePaginator $paginator
     * @param array $relations
     */
    protected function hydrateFromCache(LengthAwarePaginator $paginator, array $relations): LengthAwarePaginator
    {
        $dictionaries = collect($relations)->mapWithKeys(function ($relation) {
            $cacheKey = 'all_' . Str::snake(Str::plural($relation));
            $modelClass = 'App\\Models\\' . Str::studly($relation);

            return [
                $relation => Cache::rememberForever($cacheKey, fn() => $modelClass::all()->keyBy('id'))
            ];
        });

        $paginator->getCollection()->each(function ($model) use ($dictionaries) {
            foreach ($dictionaries as $relation => $data) {
                $foreignKey = Str::snake($relation) . '_id';

                if ($model->{$foreignKey}) {
                    $model->setRelation($relation, $data->get($model->{$foreignKey}));
                }
            }
        });

        return $paginator;
    }
}
