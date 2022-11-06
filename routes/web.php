<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoekenController;
use App\Http\Controllers\ArduinoController;
use App\Http\Controllers\SensorenController;
use App\Http\Controllers\UitleenController;
use App\Http\Controllers\WelcomeController;


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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', 'App\Http\Controllers\WelcomeController@index');


Route::get('/arduino', 'App\Http\Controllers\ArduinoController@index');
Route::post('store-boeken', [BoekenController::class, 'store']);

Route::get('/boeken', 'App\Http\Controllers\boekenController@index');
Route::post('store-arduino', [ArduinoController::class, 'store']);

Route::get('/sensoren', 'App\Http\Controllers\sensorenController@index');
Route::post('store-sensoren', [SensorenController::class, 'store']);

Route::get('/uitleen', 'App\Http\Controllers\uitleenController@index');
Route::post('store-uitleen', [UitleenController::class, 'store']);

Route::get('delete-uitleen/{id}', [WelcomeController::class, 'destroy']);

Route::get('delete-boeken/{id}', [BoekenController::class, 'destroy']);

Route::get('delete-arduino/{id}', [ArduinoController::class, 'destroy']);

Route::get('delete-sensoren/{id}', [SensorenController::class, 'destroy']);

Route::get('edit-uitleen/{id}', [WelcomeController::class, 'edit']);

Route::put('update-uitleen/{id}', [WelcomeController::class, 'update']);

Route::get('edit-sensoren/{id}', [SensorenController::class, 'edit']);

Route::put('update-sensoren/{id}', [SensorenController::class, 'update']);

Route::get('edit-arduino/{id}', [ArduinoController::class, 'edit']);

Route::put('update-arduino/{id}', [ArduinoController::class, 'update']);

Route::get('edit-boeken/{id}', [BoekenController::class, 'edit']);

Route::put('update-boeken/{id}', [BoekenController::class, 'update']);


Route::get('/404', function () {
    return view('404');
});

