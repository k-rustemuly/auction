<?php

namespace App\Module\Car\Resources;

use App\Http\Resources\BaseJsonResource;
use App\Module\CarModel\Resources\CarModelResource;
use App\Module\Color\Resources\ColorResource;
use App\Module\EngineType\Resources\EngineTypeResource;
use App\Module\Mark\Resources\MarkResource;
use App\Module\Region\Resources\RegionResource;
use App\Module\Status\Resources\StatusResource;
use App\Module\TransmissonType\Resources\TransmissonTypeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarResource extends BaseJsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                        => $this->resource->id,
            'thumbnail'                 => Storage::disk('public')->url($this->resource->thumbnail),
            'region'                    => new RegionResource($this->whenLoaded('region')),
            'mark'                      => new MarkResource($this->whenLoaded('mark')),
            'carModel'                  => new CarModelResource($this->whenLoaded('carModel')),
            'engineType'                => new EngineTypeResource($this->whenLoaded('engineType')),
            'transmissonType'           => new TransmissonTypeResource($this->whenLoaded('transmissonType')),
            'color'                     => new ColorResource($this->whenLoaded('color')),
            'status'                    => new StatusResource($this->whenLoaded('status')),
            'title'                     => $this->resource->title,
            'year'                      => $this->resource->year,
            'mileage'                   => $this->resource->mileage,
            'engine_capacity'           => $this->resource->engine_capacity,
            'vin'                       => $this->resource->vin,
            'is_method_auc_down'        => $this->resource->is_method_auc_down,
            'initial_contract_price'    => $this->resource->initial_contract_price,
            'min_contract_price'        => $this->resource->min_contract_price,
            'assurance_amount'          => $this->resource->assurance_amount,
            'purchased_price'           => $this->resource->purchased_price,
            'registered_date'           => $this->resource->registered_date->format('d.m.Y H:i'),
            'bid_submission_end_date'   => $this->resource->bid_submission_end_date->format('d.m.Y H:i'),
            'start_date'                => $this->resource->start_date->format('d.m.Y H:i'),
            'viewed_count'              => $this->resource->viewed_count,
            'added_to_favorites_count'  => $this->resource->added_to_favorites_count,
            'created_at'                => $this->resource->created_at->format('d.m.Y H:i'),
        ];
    }
}
