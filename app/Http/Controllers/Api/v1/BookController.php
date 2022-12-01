<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Http\Resources\BookCollection;

class BookController extends Controller
{
    public function index()
    {
        return new BookCollection(Book::all());
    }

    public function show($id)
    {
        return new BookResource(Book::findOrFail($id));
    }
}
