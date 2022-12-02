<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;
use App\Http\Controllers\Api\v1\BookController;
use App\Http\Controllers\Api\v1\HouseController;
use App\Http\Controllers\Api\v1\SpellController;
use App\Http\Controllers\Api\v1\StaffController;
use App\Http\Controllers\Api\v1\PotionController;
use App\Http\Controllers\Api\v1\StudentController;
use App\Http\Controllers\Api\v1\CharacterController;
use App\Http\Controllers\Api\v1\NormalCharacterController;

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

    Route::controller(HouseController::class)->group(function () {
        Route::Get('/houses', 'index');
        Route::Get('/house/{house}', 'show');
        Route::Get('/house/{house}/features', 'showFeatures');
    });

    Route::controller(StaffController::class)->group(function () {
        Route::Get('/staff', 'index');
        Route::Get('/staff/{character}', 'show');
    });

    Route::controller(StudentController::class)->group(function () {
        Route::Get('/students', 'index');
        Route::Get('/student/{character}', 'show');
    });

    Route::controller(NormalCharacterController::class)->group(function () {
        Route::Get('/peoples', 'index');
        Route::Get('/peoples/{character}', 'show');
    });
});
