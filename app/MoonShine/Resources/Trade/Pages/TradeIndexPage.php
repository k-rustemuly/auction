<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Trade\Pages;

use App\Models\Category;
use App\Models\Region;
use App\Models\Status;
use App\Models\Trade;
use App\MoonShine\Resources\Category\CategoryResource;
use App\MoonShine\Resources\Region\RegionResource;
use App\MoonShine\Resources\Status\StatusResource;
use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\QueryTags\QueryTag;
use MoonShine\UI\Components\Metrics\Wrapped\Metric;
use MoonShine\UI\Fields\ID;
use App\MoonShine\Resources\Trade\TradeResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Url;
use Throwable;
use Illuminate\Database\Eloquent\Builder;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Select;

/**
 * @extends IndexPage<TradeResource>
 */
class TradeIndexPage extends IndexPage
{
    protected bool $isLazy = true;

    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make(),
            Image::make(__('moonshine::ui.field.thumbnail'), 'thumbnail')
                ->itemAttributes(fn($item) => [
                    'src' => $item,
                    'alt' => '123'
                ])
                ->disk('public'),
            BelongsTo::make(__('moonshine::ui.field.category'), 'category', fn(Category $category) => $category->name, CategoryResource::class),
            BelongsTo::make(__('moonshine::ui.field.region'), 'region', fn(Region $region) => $region->name, RegionResource::class),
            Url::make(__('moonshine::ui.field.link'), 'link')->blank(),
            Text::make(__('moonshine::ui.field.title'), 'title'),
            Switcher::make(__('moonshine::ui.field.isMethodAucDown'), 'isMethodAucDown'),
            Switcher::make(__('moonshine::ui.field.isProcessed'), 'isProcessed'),
            BelongsTo::make(__('moonshine::ui.field.status'), 'status', fn(Status $status) => $status->name, StatusResource::class),
            Date::make(__('moonshine::ui.field.tradeStartDate'), 'tradeStartDate')->sortable(),
        ];
    }

    /**
     * @return ListOf<ActionButtonContract>
     */
    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @return list<FieldContract>
     */
    protected function filters(): iterable
    {
        return [
            Text::make(__('moonshine::ui.field.title'), 'title_ru')
                ->setValue('Легковые'),
            Select::make(__('moonshine::ui.field.category'), 'category_id')
                ->options(Category::all()->pluck('name', 'id')->toArray())
                ->searchable()
                ->nullable(),
            Select::make(__('moonshine::ui.field.region'), 'region_id')
                ->options(Region::all()->pluck('name', 'id')->toArray())
                ->searchable()
                ->nullable(),
            Select::make(__('moonshine::ui.field.status'), 'status_id')
                ->options(Status::all()->pluck('name', 'id')->toArray())
                ->searchable()
                ->nullable(),
            Select::make(__('moonshine::ui.field.method'), 'isMethodAucDown')
                ->options([
                    0 => __('moonshine::ui.up'),
                    1 => __('moonshine::ui.down'),
                ])
                ->nullable(),
            Switcher::make(__('moonshine::ui.field.isProcessed'), 'isProcessed'),

        ];
    }

    /**
     * @return list<QueryTag>
     */
    protected function queryTags(): array
    {
        return [
        ];
    }

    /**
     * @return list<Metric>
     */
    protected function metrics(): array
    {
        return [];
    }

    /**
     * @param  TableBuilder  $component
     *
     * @return TableBuilder
     */
    protected function modifyListComponent(ComponentContract $component): ComponentContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
