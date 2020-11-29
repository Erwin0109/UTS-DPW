<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ResponController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;


// Setting Auth
// LOGIN
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
// LOGOUT
Route::get('logout', [AuthController::class, 'logout']);
// REGISTER
Route::get('/register', [AuthController::class, 'showRegister']);

// Resource Router + Prefix Hanya Berguna Untuk CRUD
Route::prefix('admin')->middleware('auth')->group(function(){
Route::resource('beranda', BerandaController::class);
Route::resource('artikel', ArtikelController::class);
Route::resource('komentar', KomentarController::class);
Route::resource('respon', ResponController::class);
Route::resource('user', UserController::class);
});

// Client
Route::get('home', [ClientController::class, 'showHome']);
Route::get('artikel', [ClientController::class, 'showArtikel']);
Route::get('contact', [ClientController::class, 'showContact']);
Route::post('filter', [ClientController::class, 'filter']);

// Setting HomeController
// Route::get('/', [HomeController::class, 'index']);
// Route::get('home', [HomeController::class, 'index']);
// Route::get('beranda', [HomeController::class, 'beranda']);
// Route::get('beranda/{beranda}', [HomeController::class, 'detail']);
// Route::get('Q&A', [HomeController::class, 'QA']);