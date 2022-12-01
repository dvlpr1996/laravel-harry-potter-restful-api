<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PotionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'potion_name' => $this->name,
            'potion_slug' => $this->slug,
            'potion_effect' => $this->effect,
            'potion_difficulty' => $this->difficulty,
            'potion_ingredients' => $this->ingredients,
            'potion_color' => $this->color,
        ];
    }
}
