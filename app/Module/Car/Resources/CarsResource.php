<?php

namespace App\Module\Car\Resources;

use App\Http\Resources\BaseResourceCollection;
use Illuminate\Http\Request;

class CarsResource extends BaseResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => CarResource::collection($this->collection)
        ];
    }
}
