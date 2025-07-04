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
            "longitude" => $this->when($request->map, $this->longitude),
            "latitude" => $this->when($request->map, $this->latitude),
            "star_count" => $this->when($request->map || $request->recommended || $request->full_detail, number_format($this->star_count, 1)),
            "tags" => $this->when($request->map || $request->recommended || $request->full_detail, $this->tags),
        ];
    }
}
