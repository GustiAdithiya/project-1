<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MitraController;

Route::resource('produk', ProdukController::class)->middleware('auth');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/mitra', [MitraController::class, 'index'])->name('mitra');
Route::get('/tambahmitra', [MitraController::class, 'tambahmitra'])->name('tambahmitra');
Route::post('/insertdata', [MitraController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}', [MitraController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [MitraController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [MitraController::class, 'delete'])->name('delete');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
