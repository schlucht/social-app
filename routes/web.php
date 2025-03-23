<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix( 'dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/weather-list', [WeatherController::class,'index'])->name('weatherList');
});