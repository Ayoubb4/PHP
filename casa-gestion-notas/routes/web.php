<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProductoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('notas/', [NotaController::class, 'index'])->name('notas.index');
Route::get('notas/create', [NotaController::class, 'create'])->name('notas.create');
Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
Route::get('/notas/{id}', [NotaController::class, 'show'])->name('notas.show');
Route::delete('/notas/{id}',[NotaController::class, 'delete'])->name('notas.delete');



Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}',[ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{id}', [ProductoController::class, 'delete'])->name('productos.delete');