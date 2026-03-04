<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Trade\Pages;

use App\Models\Car;
use App\Models\CarModel;
use App\Models\Category;
use App\Models\Color;
use App\Models\Country;
use App\Models\EngineType;
use App\Models\Mark;
use App\Models\Status;
use App\Models\Trade;
use App\Models\TransmissonType;
use App\MoonShine\Components\PdfView;
use App\MoonShine\Resources\Category\CategoryResource;
use App\MoonShine\Resources\Region\RegionResource;
use App\MoonShine\Resources\Status\StatusResource;
use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\Contracts\UI\FieldContract;
use App\MoonShine\Resources\Trade\TradeResource;
use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\TypeCasts\ModelCaster;
use MoonShine\Support\DTOs\AsyncCallback;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\ActionButton;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Field;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Url;
use Throwable;
use MoonShine\UI\Collections\Fields;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Number;
use Sunrise\Vin\Vin;

/**
 * @extends DetailPage<TradeResource>
 */
class TradeDetailPage extends DetailPage
{
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
                ])
                ->disk('public'),
            Url::make(__('moonshine::ui.field.link'), 'link')->blank(),
            Text::make(__('moonshine::ui.field.title'), 'title'),
            Switcher::make(__('moonshine::ui.field.isMethodAucDown'), 'isMethodAucDown'),
            Switcher::make(__('moonshine::ui.field.isProcessed'), 'isProcessed'),
            BelongsTo::make(__('moonshine::ui.field.status'), 'status', fn(Status $status) => $status->name, StatusResource::class),
            BelongsTo::make(__('moonshine::ui.field.category'), 'category', fn(Category $category) => $category->name, CategoryResource::class),
            BelongsTo::make(__('moonshine::ui.field.region'), 'region', fn($region) => $region->name, RegionResource::class),
            Text::make(__('moonshine::ui.field.initialContractPrice'), 'initialContractPriceFormatted'),
            Text::make(__('moonshine::ui.field.minContractPrice'), 'minContractPriceFormatted'),
            Text::make(__('moonshine::ui.field.assuranceAmount'), 'assuranceAmountFormatted'),
            Text::make(__('moonshine::ui.field.purchasePrice'), 'purchasePriceFormatted'),
            Textarea::make(__('moonshine::ui.field.description'), 'description'),
            Text::make(__('moonshine::ui.field.registeredDate'), 'registeredDate'),
            Text::make(__('moonshine::ui.field.dateModified'), 'dateModified'),
            Text::make(__('moonshine::ui.field.bidSubmissionEndDate'), 'bidSubmissionEndDate'),
            Text::make(__('moonshine::ui.field.tradeStartDate'), 'tradeStartDate'),
            Image::make(__('moonshine::ui.field.images'), 'images')
                ->multiple()
                ->itemAttributes(fn($item) => [
                    'src' => $item,
                ])
                ->disk('public'),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons()
            ->prepend(
                ActionButton::make(__('moonshine::ui.button.next'),
                    url: fn($model) => $this->getResource()?->getPageUrl(
                        TradeDetailPage::class, params: [
                            'resourceItem' => Trade::where('status_id', Status::BID_SUBMISSION)
                                ->where('isProcessed', false)
                                ->where('isMethodAucDown', true)
                                ->where('title_ru', 'LIKE', 'Легковые%')
                                ->where('id', '>', $model->getKey())
                                ->where('tradeStartDate', '>=', now()->format('Y-m-d'))
                                ->first()?->id
                                ?? 0
                            ]
                    )
                )
            )
            ->prepend(
                ActionButton::make(__('moonshine::ui.button.process'))
                    ->canSee(fn(Trade $trade) => is_null($trade->category_id))
                    ->method('process', callback: AsyncCallback::with(responseHandler: 'reloadPage'))
            );
    }


    /**
     * @param  TableBuilder  $component
     *
     * @return TableBuilder
     */
    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
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
            ...parent::bottomLayer(),
            FormBuilder::make(
                route('car.save', ['trade' => $this->getItem()?->id])
            )
                ->name('processForm')
                ->reactiveUrl(route('moonshine.reactive',['pageUri' => $this->getResource()->getDetailPage()->getUriKey(), 'resourceUri' => $this->getResource()->getUriKey(), 'resourceItem' => $this->getItem()?->id]))
                ->fields(
                    [
                        Grid::make([
                            Column::make(
                                [
                                    Select::make(__('moonshine::ui.field.mark'), 'mark_id')
                                        ->options(Mark::pluck('name', 'id')->toArray())
                                        ->searchable()
                                        ->nullable()
                                        ->reactive(function(Fields $fields, mixed $value, Field $field, array $values): Fields {
                                            $field->setValue($value);

                                            return tap($fields, static fn ($fields) =>
                                                    $fields
                                                        ->findByColumn('car_model_id')
                                                        ?->options(
                                                            CarModel::where('mark_id', $value)
                                                                ->get()
                                                                ->pluck('name', 'id')
                                                                ->toArray()
                                                        )
                                                );
                                            },
                                            silent: true
                                        ),
                                    Number::make(__('moonshine::ui.field.year'), 'year')
                                        ->min(1900)
                                        ->max((int) date('Y'))
                                        ->nullable()
                                        ->reactive(),
                                    Text::make(__('moonshine::ui.field.engine_capacity'), 'engine_capacity')
                                        ->nullable(),
                                    Select::make(__('moonshine::ui.field.transmission_type'), 'transmisson_type_id')
                                        ->options(TransmissonType::all()->pluck('name', 'id')->toArray())
                                        ->nullable(),
                                    Text::make(__('moonshine::ui.field.vin'), 'vin')
                                        ->nullable()
                                        ->reactive(function(Fields $fields, ?string $value, Field $field, array $values): Fields {
                                            $field->setValue($value);
                                            if (strlen($value) == 17) {
                                                //
                                                $vin = new Vin($value);

                                                $years = $vin->getModelYear();
                                                $year = $years ? end($years) : '';

                                                $fields->findByColumn('year')?->setValue($year);
                                                $fields->findByColumn('country_id')?->setValue(Country::where('name_en', $vin->getCountry())->first()?->id ?? null);

                                                return $fields;
                                            }
                                            return $fields;
                                            },
                                            silent: true
                                        ),
                                ],
                                colSpan: 2,
                                adaptiveColSpan: 2
                            ),
                            Column::make(
                                [
                                    Select::make(__('moonshine::ui.field.model'), 'car_model_id')
                                        ->searchable()
                                        ->required()
                                        ->reactive()
                                        ->options(fn(Select $select) => $select->getValue() ? CarModel::find($select->getValue())->pluck('name', 'id')->toArray() : []),
                                    Grid::make([
                                        Column::make([
                                            Number::make(__('moonshine::ui.field.mileage'), 'mileage')
                                                ->nullable(),
                                        ],
                                        colSpan: 8,
                                        adaptiveColSpan: 8),

                                        Column::make([
                                            Select::make('-', 'mileage_unit')
                                                ->options(
                                                    [
                                                        'km' => 'КМ',
                                                        'mi' => 'MI'
                                                    ]
                                                )
                                                ->default('km')
                                        ],
                                        colSpan: 4,
                                        adaptiveColSpan: 4),
                                    ]),
                                    Select::make(__('moonshine::ui.field.engine_type'), 'engine_type_id')
                                        ->options(EngineType::all()->pluck('name', 'id')->toArray())
                                        ->searchable()
                                        ->nullable(),
                                    Select::make(__('moonshine::ui.field.color'), 'color_id')
                                        ->options(Color::all()->pluck('name', 'id')->toArray())
                                        ->searchable()
                                        ->nullable(),
                                    Select::make(__('moonshine::ui.field.country'), 'country_id')
                                        ->options(Country::all()->pluck('name', 'id')->toArray())
                                        ->searchable()
                                        ->nullable()
                                        ->reactive(),
                                ],
                                colSpan: 2,
                                adaptiveColSpan: 2
                            ),
                            Column::make(
                                [
                                    Tabs::make([...$this->getTabs()])
                                        ->canSee(fn() => $this->getItem()?->status_id == Status::BID_SUBMISSION)
                                ],
                                colSpan: 8,
                                adaptiveColSpan: 8
                            )
                        ])

                    ]
                )
                ->canSee(fn() => $this->getItem()?->category_id === Category::PASSENGER_CARS && !$this->getItem()?->isProcessed)
                ->fillCast($this->getItem()?->car, new ModelCaster(Car::class)),
        ];
    }

    private function getTabs(): array
    {
        $documents = $this->getItem()?->documents ?? [];
        $tabs = [];
        foreach ($documents as $index => $document) {
            if(is_array($document)) {
                $tabs[] = Tab::make($document['name'], [
                    PdfView::make(Storage::disk('public')->url($document['url']), $document['url'])
                ]);
            }
        }
        return $tabs;
    }
}
