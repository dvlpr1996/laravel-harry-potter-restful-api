<?php

namespace App\Http\Resources\v1\Producers;

use App\Http\Resources\v1\Trait\CollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProducerCollection extends ResourceCollection
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
