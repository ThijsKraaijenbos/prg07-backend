<?php

namespace App\Http\Resources\Restaurant;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "img_url" => $this->img_url,
            "address" => $this->address,

            "longitude" => $this->when($request->longlat, $this->longitude),
            "latitude" => $this->when($request->longlat, $this->latitude),
        ];
    }
}
