<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64)->unique();
            $table->string('slug', 64)->unique();
            $table->string('author', 32);
            $table->string('language', 16);
            $table->string('genre', 16);
            $table->string('type', 32);
            $table->string('country', 16);
            $table->tinyInteger('series_number');
            $table->string('ISBN', 13)->unique();
            $table->smallInteger('pages');
            $table->string('uk_publish_date', 10);
            $table->string('us_publish_date', 10);
            $table->string('cover_path', 128)->nullable();
            $table->string('book_info_url', 128)->nullable();
            $table->text('summary')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
