<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRole\MoonShineUserRoleResource;
use App\MoonShine\Resources\Category\CategoryResource;
use App\MoonShine\Resources\Region\RegionResource;
use App\MoonShine\Resources\Mark\MarkResource;
use App\MoonShine\Resources\CarModel\CarModelResource;
use App\MoonShine\Resources\TransmissonType\TransmissonTypeResource;
use App\MoonShine\Resources\EngineType\EngineTypeResource;
use App\MoonShine\Resources\Status\StatusResource;
use App\MoonShine\Resources\Trade\TradeResource;
use App\MoonShine\Resources\Color\ColorResource;
use App\MoonShine\Resources\Country\CountryResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  CoreContract<MoonShineConfigurator>  $core
     */
    public function boot(CoreContract $core): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                CategoryResource::class,
                RegionResource::class,
                MarkResource::class,
                CarModelResource::class,
                TransmissonTypeResource::class,
                EngineTypeResource::class,
                StatusResource::class,
                TradeResource::class,
                ColorResource::class,
                CountryResource::class,
            ])
            ->pages([
                ...$core->getConfig()->getPages(),
            ])
        ;
    }
}
