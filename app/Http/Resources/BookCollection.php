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
                'copyright' => '© Copyright 2022 (until present) Laravel restful harry potter api'
            ]
        ];
    }
}
