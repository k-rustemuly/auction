<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Trade;

use App\Models\Trade;
use App\Module\Etp\Services\EtpService;
use App\MoonShine\Resources\Trade\Pages\TradeIndexPage;
use App\MoonShine\Resources\Trade\Pages\TradeFormPage;
use App\MoonShine\Resources\Trade\Pages\TradeDetailPage;
use MoonShine\Contracts\Core\DependencyInjection\CrudRequestContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Attributes\AsyncMethod;
use MoonShine\Support\Enums\Action;
use MoonShine\Support\Enums\SortDirection;
use MoonShine\Support\ListOf;

/**
 * @extends ModelResource<Trade, TradeIndexPage, TradeFormPage, TradeDetailPage>
 */
class TradeResource extends ModelResource
{
    protected string $model = Trade::class;

    protected string $sortColumn = 'tradeStartDate';

    protected SortDirection $sortDirection = SortDirection::ASC;

    protected bool $saveQueryState = true;

    protected array $with = ['status', 'category', 'region'];

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.trade_title');
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            TradeIndexPage::class,
            TradeFormPage::class,
            TradeDetailPage::class,
        ];
    }

    protected function activeActions(): ListOf
    {
        return new ListOf(Action::class, [
            Action::DELETE,
            Action::MASS_DELETE,
            Action::VIEW
        ]);
    }

    #[AsyncMethod]
    public function process(CrudRequestContract $request, EtpService $etpService)
    {
        $trade = $request->getResource()->getItem();
        $etpService->fetchTrade($trade);
    }
}
