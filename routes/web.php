<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::get('/weather-list', function () {
    return view('weather.weather-list');
});
