<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('cars', [CarController::class, 'list'])
    ->name('cars.list');
