<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->unique();
            $table->string('slug', 64)->unique();
            $table->enum('type', ['0', '1', '2'])->comment('0:student 1:staff 2:others');
            $table->string('species', 32);
            $table->string('gender', 16);
            $table->string('house', 32)->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('ancestry', 32)->nullable();
            $table->boolean('is_wizard')->nullable();
            $table->string('patronus', 32)->nullable();
            $table->string('wand_core', 32)->nullable();
            $table->boolean('is_alive')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
