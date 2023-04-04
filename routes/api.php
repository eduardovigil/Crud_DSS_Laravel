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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articulos', [ArticuloController::class,'index']); //Mostrar registros
Route::post('/articulos', [ArticuloController::class,'store']);//Crear Registros
Route::put('/articulos/{id}', [ArticuloController::class,'update']);//Actualizar registros
Route::delete('/articulos/{id}', [ArticuloController::class,'destroy']);//Eliminar registros