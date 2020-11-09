<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [\Laravel\Passport\Http\Controllers\AccessTokenController::class, 'issueToken'])
    ->middleware(['api-login', 'throttle']);
Route::post('info-cliente', 'App\Http\Controllers\ClientesController@infoCliente');
Route::post('crear-cliente', 'App\Http\Controllers\ClientesController@crearCliente');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
