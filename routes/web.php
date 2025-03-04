<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class, 'Welcome'])
    ->name('welcome')->name('welcome');
Route::get('/weather',[WeatherController::class,'index'])
    ->name('weather');
