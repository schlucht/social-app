<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index'])
    ->name('welcome')->name('welcome');

Route::controller(WeatherController::class)->group(function () {
    Route::get('/weather/{id}','index')
        ->name('weather');
});




