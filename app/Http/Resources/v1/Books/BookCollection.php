<?php

namespace App\Http\Resources\v1\Books;

use App\Http\Resources\v1\Trait\CollectionTrait;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BookCollection extends ResourceCollection
{
    use CollectionTrait;

    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => $this->collectionMeta()
        ];
    }
}
