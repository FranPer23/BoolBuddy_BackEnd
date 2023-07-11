<?php

use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\TechnologyController;
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



Route::get('profiles', [ProfileController::class, 'index']);

Route::get('profiles/{id}', [ProfileController::class, 'show']);
Route::get('technologies', [TechnologyController::class, 'index']);

Route::post('messages', [MessageController::class, 'index']);
