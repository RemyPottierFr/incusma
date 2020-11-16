<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MissionController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customers', [CustomerController::class, "index_api"]);

Route::get('/customers/{id}/missions', [MissionController::class, "index_api"]);
Route::get('/customers/{id}', [CustomerController::class, "details_api"]);

