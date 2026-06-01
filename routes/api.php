<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\EventController;

Route::apiResource(
    'categories',
    CategoryController::class
);

Route::apiResource(
    'events',
    EventController::class
);