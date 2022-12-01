<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BookSeeder extends Seeder
{
    public function run()
    {
        $dataPath = __DIR__ . '/../../database/data/books.json';

        if (is_file($dataPath) && file_exists($dataPath)) {

            $data = json_decode(File::get($dataPath));

            foreach ($data as $key => $value) {
                Book::create([
                    'title' => $value->title,
                    'slug' => Str::slug($value->title),
                    'author' => $value->author,
                    'language' => $value->language,
                    'genre' => $value->genre,
                    'type' => $value->type,
                    'country' => $value->country,
                    'series_number' => $value->series_number,
                    'ISBN' => $value->isbn,
                    'pages' => $value->pages,
                    'uk_publish_date' => $value->publish_date[0]->uk,
                    'us_publish_date' => $value->publish_date[1]->us,
                    'cover_path' => $value->cover_path,
                    'book_info_url' => $value->book_info_url,
                    'summary' => $value->summary,
                ]);
            }
        }
    }
}
