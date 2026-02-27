<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Color;

use App\Models\Color;
use App\MoonShine\Resources\Color\Pages\ColorIndexPage;
use App\MoonShine\Resources\Color\Pages\ColorFormPage;
use App\MoonShine\Resources\Color\Pages\ColorDetailPage;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Color, ColorIndexPage, ColorFormPage, ColorDetailPage>
 */
class ColorResource extends ModelResource
{
    protected string $model = Color::class;

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.color_title');
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ColorIndexPage::class,
            ColorFormPage::class,
            ColorDetailPage::class,
        ];
    }
}
