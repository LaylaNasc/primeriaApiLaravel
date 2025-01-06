<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

route::get('/status', [ApiController::class, 'status']);
route::get('/clientes', [ApiController::class, 'clientes']);
Route::get('/clienteDeId/{id}', [ApiController::class, 'clienteDeId']);
Route::post('/cliente', [ApiController::class, 'cliente']);
Route::post('/addCliente', [ApiController::class, 'addCliente']);
Route::put('/updateCliente', [ApiController::class, 'updateCliente']);
Route::delete('/deleteCliente/{id}', [ApiController::class, 'deleteCliente']);