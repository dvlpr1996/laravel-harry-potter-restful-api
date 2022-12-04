<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProducerResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'producer_name' => $this->name,
        ];
    }
}
