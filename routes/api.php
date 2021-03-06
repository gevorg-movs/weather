<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('getWeatherInCity', [\App\Http\Controllers\WeatherController::class, 'getWeatherInCity']);
Route::get('getWeathers', [\App\Http\Controllers\WeatherController::class, 'getWeathers']);
