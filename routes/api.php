<?php

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
Route::group(
    ['prefix' => 'settings', 'namespace' => 'App\Http\Controllers'],
    function () {
        Route::resource('regions', RegionController::class, ['only' => ['index', 'show']]);
        Route::resource('provinces', ProvinceController::class, ['only' => ['index', 'show']]);
        Route::resource('cities', CityController::class, ['only' => ['index', 'show']]);
    }
);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
