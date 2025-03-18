<?php

use App\Http\Controllers\tareaController;
use Illuminate\Support\Facades\Route;

Route::get('/tareas', [tareaController::class, 'index'])->name('tareas.index');

Route::get('/tareas/create', [tareaController::class, 'create'])->name('tareas.create');

Route::post('/tareas', [tareaController::class, 'store'])->name('tareas.store');

Route::get('/tareas/completed/{id}', [tareaController::class, 'completed'])->name('tareas.completed');
