<?php

declare(strict_types=1);

namespace App\MoonShine\Components;

use Closure;
use MoonShine\UI\Components\MoonShineComponent;

/**
 * @method static static make()
 */
final class PdfView extends MoonShineComponent
{
    protected string $view = 'admin.components.pdf-view';

    public function __construct(protected ?string $url, protected ?string $file)
    {
        parent::__construct();

        //
    }

    private function getUrl(): ?string
    {
        return $this->url;
    }

    /*
     * @return array<string, mixed>
     */
    protected function viewData(): array
    {
        return [
            'url' => $this->getUrl(),
            'file' => $this->file,
        ];
    }
}
