<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Config;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SpellCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'created at' => Config::get('api.meta_info.created_at'),
                'home page' => Config::get('api.meta_info.home_page'),
                'copyright' => Config::get('api.meta_info.copyright')
            ]
        ];
    }
}
