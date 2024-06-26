<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

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

Route::get('/infos', [\App\Http\Controllers\Api::class, 'infos'])->name('api.infos');

Route::post('/reservation', [\App\Http\Controllers\Api::class, 'reservation'])->name('api.reservation');

Route::delete('/cancel/{token}', [\App\Http\Controllers\Api::class, 'cancel'])->name('api.cancel');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
