<?php

namespace App\Module\Region\Resources;

use App\Http\Resources\BaseJsonResource;
use Illuminate\Http\Request;

class RegionResource extends BaseJsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'    => $this->resource->id,
            'name'  => $this->resource->name,
        ];
    }
}
