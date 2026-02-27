<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Region;

use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
use App\MoonShine\Resources\Region\Pages\RegionIndexPage;
use App\MoonShine\Resources\Region\Pages\RegionFormPage;
use App\MoonShine\Resources\Region\Pages\RegionDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Enums\Action;
use MoonShine\Support\ListOf;

/**
 * @extends ModelResource<Region, RegionIndexPage, RegionFormPage, RegionDetailPage>
 */
class RegionResource extends ModelResource
{
    protected string $model = Region::class;

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.region_title');
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            RegionIndexPage::class,
            RegionFormPage::class,
            RegionDetailPage::class,
        ];
    }

    protected function activeActions(): ListOf
    {
        return new ListOf(Action::class, [
            Action::CREATE,
            Action::UPDATE,
        ]);
    }
}
