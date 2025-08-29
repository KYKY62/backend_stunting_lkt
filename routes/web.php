<?php

use App\Http\Controllers\Api\StuntingController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')->group(function () {
    Route::get('/stunting', [StuntingController::class, 'index']);
});
