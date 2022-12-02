<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StarResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'movie_star_name' => $this->name,
        ];
    }
}
