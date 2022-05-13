<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfertaController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::post('register', [AuthController::class, 'register']);
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'ofertas'
], function ($router) {
    Route::get('/', [OfertaController::class, 'index']);
    Route::post('/guardar', [OfertaController::class, 'create']);
    Route::get('/buscar/{id}', [OfertaController::class, 'show']);
    // Route::put('/{id}', [OfertaController::class, 'update']);
    // Route::delete('/{id}', [OfertaController::class, 'delete']);
});

