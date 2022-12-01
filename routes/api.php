<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Controllers\Api\v1\BookController;
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
});
