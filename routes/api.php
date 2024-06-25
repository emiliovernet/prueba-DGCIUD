<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductoController;


Route::resource('productos', ApiProductoController::class);
