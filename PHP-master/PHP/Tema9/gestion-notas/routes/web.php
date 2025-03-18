<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\NotaController;

Route::get('/notas', [NotaController::class, 'index'])->name('notas.index');
Route::get('/notas/crear', [NotaController::class, 'create'])->name('notas.create');
Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
Route::get('/notas/{id}', [NotaController::class, 'show'])->name('notas.show');
Route::delete('/notas/{id}', [NotaController::class, 'destroy'])->name('notas.destroy');

