<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\Palettes\PurplePalette;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\ColorManager\PaletteContract;
use App\MoonShine\Resources\Category\CategoryResource;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\Region\RegionResource;
use App\MoonShine\Resources\Mark\MarkResource;
use App\MoonShine\Resources\TransmissonType\TransmissonTypeResource;
use App\MoonShine\Resources\EngineType\EngineTypeResource;
use App\MoonShine\Resources\Status\StatusResource;
use App\MoonShine\Resources\Trade\TradeResource;
use MoonShine\AssetManager\Js;
use App\MoonShine\Resources\Color\ColorResource;

final class MoonShineLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = PurplePalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
            Js::make('/js/global.js')
        ];
    }

    protected function menu(): array
    {
        return [
            // ...parent::menu(),
            MenuItem::make(TradeResource::class, __('moonshine::ui.resource.trade_title')),
            MenuItem::make(CategoryResource::class, __('moonshine::ui.resource.category_title')),
            MenuItem::make(RegionResource::class, __('moonshine::ui.resource.region_title')),
            MenuItem::make(MarkResource::class, __('moonshine::ui.resource.mark_title')),
            MenuItem::make(TransmissonTypeResource::class, __('moonshine::ui.resource.transmission_type_title')),
            MenuItem::make(EngineTypeResource::class, __('moonshine::ui.resource.engine_type_title')),
            MenuItem::make(StatusResource::class, __('moonshine::ui.resource.status_title')),
            MenuItem::make(ColorResource::class, __('moonshine::ui.resource.color_title')),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }
}
