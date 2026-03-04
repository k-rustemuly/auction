<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Country;

use App\Models\Country;
use App\MoonShine\Resources\Country\Pages\CountryIndexPage;
use App\MoonShine\Resources\Country\Pages\CountryFormPage;
use App\MoonShine\Resources\Country\Pages\CountryDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Country, CountryIndexPage, CountryFormPage, CountryDetailPage>
 */
class CountryResource extends ModelResource
{
    protected string $model = Country::class;

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.countries_title');
    }
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            CountryIndexPage::class,
            CountryFormPage::class,
            CountryDetailPage::class,
        ];
    }
}
