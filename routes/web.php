<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PdfProxyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('moonshine.index');
});

Route::get('/pdf-proxy', [PdfProxyController::class, 'show'])
    ->name('pdf.proxy');

Route::post('/car/save/{trade}', [CarController::class, 'save'])
    ->middleware('moonshine')
    ->name('car.save');

Route::post('/pdf/remove-page', [PdfController::class, 'removePage'])
    ->name('pdf.removePage');
