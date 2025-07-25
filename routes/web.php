<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\isAdmin;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware(['auth', isAdmin::class])->group(function () {
    Route::delete('/chamado/{chamado}', [ChamadoController::class, 'destroy'])->name('chamado.destroy');

    Route::patch('/chamado/{chamado}/status', [ChamadoController::class, 'alterStatus'])->name('chamado.alterStatus');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::get('/logout', LogoutController::class)->name('logout');

    Route::post('/chamados/create', [ChamadoController::class, 'store'])->name('chamados.store');

    Route::put('/chamados/{chamado}/edit', [ChamadoController::class, 'update'])->name('chamados.update');
});
