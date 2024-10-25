<?php

use APP\Http\Controllers\DepartamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/departamentos',[DepartamentoController::class,'obtenerDepartamentos']);
Route::get('/deptoporzona(id_zona)',[DepartamentoController::class,'obtenerDepartamentosporzona']);
Route::get('/depto/{id_zona}',[DepartamentoController::class,'obtenerDepartamento']);
Route::post('/crearDepto',[DepartamentoController::class,'/nuevoDepto']);
