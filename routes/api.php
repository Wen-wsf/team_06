<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TyphoonController;
use Illuminate\Http\Request;
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
Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('level', [LevelController::class, 'api_level']);

    Route::patch('level', [LevelController::class, 'api_update']);

    Route::delete('level', [LevelController::class, 'api_delete']);

    Route::get('typhoon', [TyphoonController::class, 'api_typhoon']);

    Route::patch('typhoon', [TyphoonController::class, 'api_update']);

    Route::delete('typhoon', [TyphoonController::class, 'api_delete']);


});


