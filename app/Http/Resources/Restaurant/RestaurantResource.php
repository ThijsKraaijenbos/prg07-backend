<?php

namespace App\Http\Resources\Restaurant;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
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
            "address" => $this->address,
            "longitude" => $this->when($request->full_detail, $this->longitude),
            "latitude" => $this->when($request->full_detail, $this->latitude),
            "img_url" => $this->when($request->full_detail, $this->img_url),
            "description" => $this->when($request->full_detail, $this->description),
            "star_count" => $this->when($request->full_detail, number_format($this->star_count, 1)),
            "tags" => $this->when($request->full_detail, $this->tags),
        ];
    }
}
