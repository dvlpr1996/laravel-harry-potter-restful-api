<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64)->unique();
            $table->string('slug', 64)->unique();
            $table->string('director', 16);
            $table->string('box_office');
            $table->string('us_rating', 8);
            $table->string('uk_rating', 8);
            $table->string('novel_writer', 32);
            $table->string('screenplay_writer', 32);
            $table->string('release_date');
            $table->smallInteger('running_time');
            $table->string('budget');
            $table->string('poster', 128)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
