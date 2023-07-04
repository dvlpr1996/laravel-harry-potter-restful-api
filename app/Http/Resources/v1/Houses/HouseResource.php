<?php

namespace App\Http\Resources\v1\Houses;

use Illuminate\Http\Resources\Json\JsonResource;

class HouseResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'house_id' => $this->id,
            'house_name' => $this->name,
            'house_slug' => $this->slug,
            'house_founder' => $this->founder,
            'house_color' => $this->color,
            'house_ghost' => $this->ghost_name,
            'house_animal' => $this->animal,
            'house_element' => $this->element,
            'house_slogan' => $this->slogan,
            'house_features' => collect($this->features)->pluck('feature'),
            'house_commonRoom_entrance' => $this->common_room_entrance,
            'house_commonRoom_location' => $this->common_room_location,
            'house_banner' => $this->banner_path,
        ];
    }
}
