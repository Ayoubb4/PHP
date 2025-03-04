<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/tareas', [tareaController::class, 'index']);
