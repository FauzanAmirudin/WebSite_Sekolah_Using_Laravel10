<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', function () {
    return view('berita.berita');
});

Route::get('/detail', function () {
    return view('berita.detail');
});

Route::get('/detail2', function () {
    return view('berita.detail2');
});

Route::get('/detail3', function () {
    return view('berita.detail3');
});

Route::get('/foto', function () {
    return view('foto.foto');
});

Route::get('/guru', function () {
    return view('profile.guru');
});

Route::get('/sekolah', function () {
    return view('profile.sekolah');
});

Route::get('/fasilitas', function () {
    return view('fasilitas.fasilitas');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard',[DashboardController::class,'index']) ->name('dashboard') -> middleware('auth');

