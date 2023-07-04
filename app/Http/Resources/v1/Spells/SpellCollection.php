<?php

namespace App\Http\Resources\v1\Spells;

use App\Http\Resources\v1\Trait\CollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SpellCollection extends ResourceCollection
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
