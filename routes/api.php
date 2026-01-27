<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SaidaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produto', [ProdutoController::class, 'index']);
Route::post('/produto', [ProdutoController::class, 'store']);
Route::put('/produto', [ProdutoController::class, 'update']);
Route::delete('/produto/delete/{id}', [ProdutoController::class, 'delete']);

Route::get('/cliete', [ClienteController::class, 'index']);
Route::post('/cliete', [ClienteController::class, 'store']);
Route::put('/cliete', [ClienteController::class, 'update']);
Route::delete('/cliete/delete/{id}', [ClienteController::class, 'delete']);
   
Route::get('/entrada',[EntradaController::class, 'index']);
Route::post('/entrada',[EntradaController::class, 'store']);
Route::put('/entrada',[EntradaController::class, 'update']);
Route::delete('/entrada',[EntradaController::class, 'delete']);

Route::get('/saida',[SaidaController::class, 'index']);
Route::post('/saida',[SaidaController::class, 'store']);
Route::put('/saida',[SaidaController::class, 'update']);
Route::delete('/saida',[SaidaController::class, 'delete']);