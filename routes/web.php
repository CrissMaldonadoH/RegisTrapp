<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/usuarios', [UsuariosController::class, 'index'])->middleware(['auth', 'verified'])->name('usuarios.index');
Route::get('/usuarios/registro', [UsuariosController::class, 'registro'])->middleware(['auth', 'verified'])->name('usuarios.registro');
Route::get('/usuarios/{usuario}/editar', [UsuariosController::class, 'editar'])->middleware(['auth', 'verified'])->name('usuarios.editar');
Route::get('/usuarios/{usuario}', [UsuariosController::class, 'mostrar'])->name('usuarios.mostrar');
Route::get('/users', [UsuariosController::class, 'api'])->name('usuarios.api');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
