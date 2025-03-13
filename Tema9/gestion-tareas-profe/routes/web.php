<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\TareaController;
//Se accede a esta ruta desde http://localhost/tareas
Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
//Se accede a esta ruta desde http://localhost/tareas/create
//En la vista Blade create.blade.php 
Route::get('/tareas/create', [TareaController::class, 'create'])->name('tareas.create');
// Fefine una ruta post que recibe datos enviados desde el formulario y llama al metodo store(guardar)
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas.store');
// Define una ruta Get que espera un parametro {id} llama al metodo completar del controlador y asigna el nombre tareas.completar a la ruta
Route::get('/tareas/completar/{id}', [TareaController::class, 'completar'])->name('tareas.completar');

/*//http://127.0.0.1:8000
Route::get('/', function () {
    return view('welcome');
});

//http://127.0.0.1:8000/prueba
Route::get('/prueba', function () {
    return "Hola, Laravel está funcionando";
});*/