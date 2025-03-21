<?php

use App\Http\Controllers\Weather;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix( 'dashboard')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/weather-list', [Weather::class,'index'])->name('weatherList');
});