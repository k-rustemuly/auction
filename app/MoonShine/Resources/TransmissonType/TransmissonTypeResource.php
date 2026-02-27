<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\TransmissonType;

use App\Models\TransmissonType;
use App\MoonShine\Resources\TransmissonType\Pages\TransmissonTypeIndexPage;
use App\MoonShine\Resources\TransmissonType\Pages\TransmissonTypeFormPage;
use App\MoonShine\Resources\TransmissonType\Pages\TransmissonTypeDetailPage;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Enums\Action;
use MoonShine\Support\ListOf;

/**
 * @extends ModelResource<TransmissonType, TransmissonTypeIndexPage, TransmissonTypeFormPage, TransmissonTypeDetailPage>
 */
class TransmissonTypeResource extends ModelResource
{
    protected string $model = TransmissonType::class;

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.transmission_type_title');
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            TransmissonTypeIndexPage::class,
            TransmissonTypeFormPage::class,
            TransmissonTypeDetailPage::class,
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
