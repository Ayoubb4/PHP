<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\ProfesorController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [UsuarioController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UsuarioController::class, 'register']);

Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UsuarioController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UsuarioController::class, 'showProfile'])->name('profile');
    Route::post('/profile/update', [UsuarioController::class, 'updateProfile'])->name('editarPerfil');

    Route::get('/classes', [ClaseController::class, 'index'])->name('classes');
    Route::get('/classes/{id}', [ClaseController::class, 'show'])->name('classes.show'); // Añadida para ver detalles de una clase
    Route::post('/classes/reserve', [ClaseController::class, 'reserve'])->name('classes.reserve');
    Route::post('/reservas/cancel/{id}', [ReservaController::class, 'cancelarReserva'])->name('cancelarReserva');

    Route::get('/membership', [MembresiaController::class, 'showMembership'])->name('membership');
    Route::post('/membership/update', [MembresiaController::class, 'updateMembership']);
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [UsuarioController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [UsuarioController::class, 'manageUsers'])->name('admin.users');
    Route::put('/admin/users/{id}', [UsuarioController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UsuarioController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/classes', [ClaseController::class, 'manageClasses'])->name('admin.classes');
    Route::put('/admin/classes/{id}', [ClaseController::class, 'update'])->name('admin.classes.update');
    Route::delete('/admin/classes/{id}', [ClaseController::class, 'destroy'])->name('admin.classes.destroy');
    Route::get('/admin/profesores', [ProfesorController::class, 'manageProfesores'])->name('admin.profesores');
});

Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');

// Rutas para la gestión de usuarios
Route::resource('usuarios', UsuarioController::class)->except(['create', 'store', 'show']);

// Rutas para la gestión de clases
Route::resource('clases', ClaseController::class)->except(['create', 'store', 'show']);

// Rutas para la gestión de profesores
Route::resource('profesores', ProfesorController::class)->except(['create', 'store', 'show']);