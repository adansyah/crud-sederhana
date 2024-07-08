<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/biodata', [BiodataController::class, 'index']);

Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::get('book/tambah', [BookController::class, 'create'])->middleware('auth');
Route::post('book/simpan', [BookController::class, 'save']);
Route::get('book/{id}/edit', [BookController::class, 'show']);
Route::post('book/{id}/update', [BookController::class, 'update']);
Route::get('book/{id}/hapus', [BookController::class, 'destroy']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->middleware('auth');
Route::get('mahasiswa/tambah', [MahasiswaController::class, 'create'])->middleware('auth');
Route::post('mahasiswa/simpan', [MahasiswaController::class, 'save']);
Route::get('mahasiswa/{id}/edit', [MahasiswaController::class, 'show']);
Route::post('mahasiswa/{id}/update', [MahasiswaController::class, 'update']);
Route::get('mahasiswa/{id}/hapus', [MahasiswaController::class, 'destroy']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
