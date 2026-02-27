<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\EngineType;

use App\Models\EngineType;
use App\MoonShine\Resources\EngineType\Pages\EngineTypeIndexPage;
use App\MoonShine\Resources\EngineType\Pages\EngineTypeFormPage;
use App\MoonShine\Resources\EngineType\Pages\EngineTypeDetailPage;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Support\Enums\Action;
use MoonShine\Support\ListOf;

/**
 * @extends ModelResource<EngineType, EngineTypeIndexPage, EngineTypeFormPage, EngineTypeDetailPage>
 */
class EngineTypeResource extends ModelResource
{
    protected string $model = EngineType::class;

    public function getTitle(): string
    {
        return __('moonshine::ui.resource.engine_type_title');
    }

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            EngineTypeIndexPage::class,
            EngineTypeFormPage::class,
            EngineTypeDetailPage::class,
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
