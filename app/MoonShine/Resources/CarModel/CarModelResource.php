<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\CarModel;

use Illuminate\Database\Eloquent\Model;
use App\Models\CarModel;
use App\MoonShine\Resources\CarModel\Pages\CarModelIndexPage;
use App\MoonShine\Resources\CarModel\Pages\CarModelFormPage;
use App\MoonShine\Resources\CarModel\Pages\CarModelDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Enums\Action;
use MoonShine\Support\ListOf;

/**
 * @extends ModelResource<CarModel, CarModelIndexPage, CarModelFormPage, CarModelDetailPage>
 */
class CarModelResource extends ModelResource
{
    protected string $model = CarModel::class;

    protected string $title = 'CarModels';

    protected string $sortColumn = 'is_popular';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            CarModelIndexPage::class,
            CarModelFormPage::class,
            CarModelDetailPage::class,
        ];
    }

    protected function activeActions(): ListOf
    {
        return new ListOf(Action::class, [
            Action::CREATE,
            Action::UPDATE,
        ]);
    }

    protected function search(): array
    {
        return ['name'];
    }
}
