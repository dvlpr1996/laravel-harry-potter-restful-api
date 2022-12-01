<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'book_title' => $this->title,
            'book_slug' => $this->slug,
            'book_author' => $this->author,
            'book_lang' => $this->language,
            'book_genre' => $this->genre,
            'book_type' => $this->type,
            'book_country' => $this->country,
            'book_series_number' => $this->series_number,
            'book_isbn' => $this->ISBN,
            'page_count' => $this->pages,
            'book_publish_date_in_uk' => $this->uk_publish_date,
            'book_publish_date_in_us' => $this->us_publish_date,
            'book_cover_url' => $this->cover_path,
            'book_info_wiki' => $this->book_info_url,
            'book_summary' => $this->summary,
        ];
    }
}
