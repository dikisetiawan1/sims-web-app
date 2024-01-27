<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/produk', [App\Http\Controllers\DashboardProduk::class, 'index'])->name('produk');
Route::get('/tambah-produk', [App\Http\Controllers\DashboardProduk::class, 'create'])->name('tambah-produk');
Route::post('/produk/proses', [App\Http\Controllers\DashboardProduk::class, 'store'])->name('store');



Route::get('/profile', [App\Http\Controllers\DashboardProfile::class, 'index'])->name('profile');
