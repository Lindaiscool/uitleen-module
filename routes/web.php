<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoekenController;
use App\Http\Controllers\ArduinoController;
use App\Http\Controllers\SensorenController;
use App\Http\Controllers\UitleenController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/arduino', 'App\Http\Controllers\ArduinoController@index');
Route::post('store-boeken', [BoekenController::class, 'store']);

Route::get('/boeken', 'App\Http\Controllers\boekenController@index');
Route::post('store-arduino', [ArduinoController::class, 'store']);

Route::get('/sensoren', 'App\Http\Controllers\sensorenController@index');
Route::post('store-sensoren', [SensorenController::class, 'store']);

Route::get('/uitleen', 'App\Http\Controllers\uitleenController@index');
Route::post('store-uitleen', [UitleenController::class, 'store']);


