<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rute untuk halaman login (GET)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk memproses login (POST)
Route::post('login', [LoginController::class, 'login'])->name('login.submit');

// Rute default untuk halaman login jika pengguna belum login
Route::get('/', function () {
    return redirect()->route('login');
});

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    // Rute untuk dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute untuk master pengguna (menampilkan daftar pengguna)
    Route::get('/master-pengguna', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    
    // Rute untuk logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
