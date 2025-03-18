<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notas', [NotaController::class, 'index'])->name('notas.index');
Route::get('/nota/create', [NotaController::class, 'create'])->name('notas.create');
Route::post('/nota', [NotaController::class, 'store'])->name('notas.store');
Route::get('/nota/{id}', [NotaController::class, 'show'])->name('notas.show');
Route::delete('/nota/{id}', [NotaController::class, 'delete'])->name('notas.delete');
