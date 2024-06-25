<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DireccionesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/normalizar', [DireccionesController::class, 'normalizar']);
