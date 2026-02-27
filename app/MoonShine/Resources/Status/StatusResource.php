<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Status;

use App\Models\Status;
use App\MoonShine\Resources\Status\Pages\StatusIndexPage;
use App\MoonShine\Resources\Status\Pages\StatusFormPage;
use App\MoonShine\Resources\Status\Pages\StatusDetailPage;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Status, StatusIndexPage, StatusFormPage, StatusDetailPage>
 */
class StatusResource extends ModelResource
{
    protected string $model = Status::class;

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.status_title');
    }
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            StatusIndexPage::class,
            StatusFormPage::class,
            StatusDetailPage::class,
        ];
    }
}
