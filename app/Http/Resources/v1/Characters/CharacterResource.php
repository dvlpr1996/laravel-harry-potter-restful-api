<?php

namespace App\Http\Resources\v1\Characters;

use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'char_name' => $this->name,
            'char_slug' => $this->slug,
            'char_type' => $this->type,
            'char_species' => $this->species,
            'char_gender' => $this->gender,
            'char_house' => $this->house,
            'char_date_of_birth' => $this->date_of_birth,
            'char_ancestry' => $this->ancestry,
            'char_is_wizard' => $this->is_wizard,
            'char_patronus' => $this->patronus,
            'char_wand_core' => $this->wand_core,
            'char_is_alive' => $this->is_alive,
        ];
    }
}
