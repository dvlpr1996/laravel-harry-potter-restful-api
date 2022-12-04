<?php

namespace App\Http\Controllers\Api\v1;

use App\Traits\ApiHandleRequest;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    use ApiHandleRequest;

    public function __construct()
    {
        $this->apiHandleRequestTraitNameSpaceSetter('book');
    }

    public function index()
    {
        return $this->showApiDataCollectionWithPagination(true);
    }

    public function show($book)
    {
        return $this->showApiData($book);
    }
}
