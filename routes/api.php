<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;

Route::view('/', 'welcome');

Route::prefix('v1')->group(function () {
    Route::Get('/', [ApiController::class, 'index']);
});
