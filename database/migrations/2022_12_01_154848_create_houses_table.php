<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32)->unique();
            $table->string('slug', 32)->unique();
            $table->string('color', 16);
            $table->string('ghost_name', 64)->unique();
            $table->string('common_room_location', 64);
            $table->string('common_room_entrance', 64);
            $table->string('founder', 32)->unique();
            $table->string('animal', 16);
            $table->string('element', 16);
            $table->string('slogan', 128)->unique()->nullable();
            $table->string('banner_path', 128)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
