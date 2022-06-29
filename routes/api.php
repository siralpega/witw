<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuessController;

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

Route::get('/guess', [GuessController::class, 'index']);
Route::post('/guess', [GuessController::class, 'make']);
