<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas solo para index, create y edit del controlador de recursos
Route::resource('productos', ProductoController::class)->only([
    'index', 'create', 'edit'
]);
