<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Mark;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mark;
use App\MoonShine\Resources\Mark\Pages\MarkIndexPage;
use App\MoonShine\Resources\Mark\Pages\MarkFormPage;
use App\MoonShine\Resources\Mark\Pages\MarkDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Enums\Action;
use MoonShine\Support\Enums\SortDirection;
use MoonShine\Support\ListOf;

/**
 * @extends ModelResource<Mark, MarkIndexPage, MarkFormPage, MarkDetailPage>
 */
class MarkResource extends ModelResource
{
    protected string $model = Mark::class;

    protected string $sortColumn = 'is_popular';

    // protected SortDirection $sortDirection = SortDirection::ASC;

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.mark_title');
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            MarkIndexPage::class,
            MarkFormPage::class,
            MarkDetailPage::class,
        ];
    }

    protected function activeActions(): ListOf
    {
        return new ListOf(Action::class, [
            Action::CREATE,
            Action::UPDATE,
            Action::VIEW
        ]);
    }
}
