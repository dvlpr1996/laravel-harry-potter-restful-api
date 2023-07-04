<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Controllers\Api\v1\BookController;
use App\Http\Controllers\Api\v1\HouseController;
use App\Http\Controllers\Api\v1\MovieController;
use App\Http\Controllers\Api\v1\SpellController;
use App\Http\Controllers\Api\v1\StaffController;
use App\Http\Controllers\Api\v1\PotionController;
use App\Http\Controllers\Api\v1\StudentController;
use App\Http\Controllers\Api\v1\CharacterController;
use App\Http\Controllers\Api\v1\NormalCharacterController;

Route::prefix('v1')->group(function () {
    Route::Get('/', [ApiController::class, 'index'])->name('mainEndPoints');

    Route::controller(BookController::class)->group(function () {
        Route::Get('/books', 'index');
        Route::Get('/books/{book}', 'show');
    });

    Route::controller(CharacterController::class)->group(function () {
        Route::Get('/characters', 'index');
        Route::Get('/characters/{character}', 'show');
    });

    Route::controller(SpellController::class)->group(function () {
        Route::Get('/spells', 'index');
        Route::Get('/spells/{spell}', 'show');
    });

    Route::controller(PotionController::class)->group(function () {
        Route::Get('/potions', 'index');
        Route::Get('/potions/{potion}', 'show');
    });

    Route::controller(HouseController::class)->group(function () {
        Route::Get('/houses', 'index');
        Route::Get('/houses/{house}', 'show');
        Route::Get('/houses/{house}/features', 'showFeatures');
    });

    Route::controller(StaffController::class)->group(function () {
        Route::Get('/staffs', 'index');
        Route::Get('/staffs/{character}', 'show');
    });

    Route::controller(StudentController::class)->group(function () {
        Route::Get('/students', 'index');
        Route::Get('/students/{character}', 'show');
    });

    Route::controller(NormalCharacterController::class)->group(function () {
        Route::Get('/peoples', 'index');
        Route::Get('/peoples/{character}', 'show');
    });

    Route::controller(MovieController::class)->group(function () {
        Route::Get('/movies', 'index');
        Route::Get('/movies/{movie}', 'show');
        Route::Get('/movies/{movie}/stars', 'showStars');
        Route::Get('/movies/{movie}/producers', 'showProducers');
    });
});

Route::fallback(function () {
    return response()->json([
        'status' => 'error',
        'message' => __('app.error.error 404')
    ], 404);
});
