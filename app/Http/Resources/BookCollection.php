<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'created at' => '12-1-2022',
                'home page' => 'https://github.com/dvlpr1996/laravel-harry-potter-restful-api',
                'copyright' => 'Copyright © 2022 (until present) Laravel restful harry potter api. All Rights Reserved'
            ]
        ];
    }
}
