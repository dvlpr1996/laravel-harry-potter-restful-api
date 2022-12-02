<?php

namespace App\Http\Resources;

use Illuminate\Support\Arr;
use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'house_id' => $this->house->id,
            'house_slug' => $this->house->slug,
            'house_feature' => $this->feature
        ];
    }
}
