<?php

namespace App\Http\Resources\v1\Trait;

trait CollectionTrait
{
    protected function collectionMeta(): array
    {
        return [
            'created at' => config('api.v1.meta_info.created_at'),
            'home page' => config('api.v1.meta_info.home_page'),
            'copyright' => config('api.v1.meta_info.copyright')
        ];
    }
}
