<?php

use App\Http\Controllers\Api\AccountsController;
use App\Http\Controllers\Api\BanksController;
use App\Http\Controllers\Api\UsersController;

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

Route::group([], function () {
    Route::resource('/accounts', AccountsController::class);
    Route::resource('/banks', BanksController::class);
    Route::resource('/users', UsersController::class);
});
