<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Controllers\Api\v1\BookController;
use App\Http\Controllers\Api\v1\SpellController;
use App\Http\Controllers\Api\v1\PotionController;
use App\Http\Controllers\Api\v1\CharacterController;

Route::prefix('v1')->group(function () {
    Route::Get('/', [ApiController::class, 'index']);

    Route::controller(BookController::class)->group(function () {
        Route::Get('/books', 'index');
        Route::Get('/book/{book}', 'show');
    });

    Route::controller(CharacterController::class)->group(function () {
        Route::Get('/characters', 'index');
        Route::Get('/character/{character}', 'show');
    });

    Route::controller(SpellController::class)->group(function () {
        Route::Get('/spells', 'index');
        Route::Get('/spell/{spell}', 'show');
    });

    Route::controller(PotionController::class)->group(function () {
        Route::Get('/potions', 'index');
        Route::Get('/potion/{potion}', 'show');
    });
});
