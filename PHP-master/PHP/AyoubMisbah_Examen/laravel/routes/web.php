<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\notaController;
//no encuentran la ruta la carperta la has llamado notas
Route::get('/nota', [notaController::class, 'index'])->name('notas.index');
Route::get('/nota/create', [notaController::class, 'create'])->name('notas.create');
Route::post('/nota', [notaController::class, 'store'])->name('notas.store');
Route::get('/nota/detalles', [notaController::class, 'show'])->name('notas.show'); // No pasa el ID, tenia que ser:Route::get('/notas/{id}', [NotaController::class, 'show'])->name('notas.show');

