<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Support\Str;
use App\Traits\SeederHandler;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class BookSeeder extends Seeder
{
    use SeederHandler;

    public function run()
    {
        $data = $this->getJsonData('books');

        foreach ($data as $key => $value) {
            Book::create([
                'title' =>  $this->prepareData($value->title),
                'slug' =>  $this->prepareSlugData($value->title),
                'author' =>  $this->prepareData($value->author),
                'language' =>  $this->prepareData($value->language),
                'genre' =>  $this->prepareData($value->genre),
                'type' =>  $this->prepareData($value->type),
                'country' =>  $this->prepareData($value->country),
                'series_number' =>  $this->prepareData($value->series_number),
                'ISBN' =>  $this->prepareData($value->isbn),
                'pages' =>  $this->prepareData($value->pages),
                'uk_publish_date' =>  $this->prepareData($value->publish_date[0]->uk),
                'us_publish_date' =>  $this->prepareData($value->publish_date[1]->us),
                'cover_path' =>  $this->prepareUrlData($value->cover_path),
                'book_info_url' =>  $this->prepareUrlData($value->book_info_url),
                'summary' => $this->prepareData($value->summary)
            ]);
        }
    }
}
