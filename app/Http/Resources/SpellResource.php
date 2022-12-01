<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SpellResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'spell_name' => $this->name,
            'spell_slug' => $this->slug,
            'spell_description' => $this->description,
            'spell_pronunciation' => $this->pronunciation,
        ];
    }
}
