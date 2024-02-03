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
// routes produk
Route::get('/produk', [App\Http\Controllers\DashboardProduk::class, 'index'])->name('produk');
Route::get('/produk/filter/{kategori}', [App\Http\Controllers\DashboardProduk::class, 'filterByCategory'])->name('filter-kategori');
Route::get('/produk/tambah', [App\Http\Controllers\DashboardProduk::class, 'create'])->name('tambah-produk');
Route::post('/produk/proses', [App\Http\Controllers\DashboardProduk::class, 'store'])->name('store');
Route::get('/produk/{id}/edit', [App\Http\Controllers\DashboardProduk::class, 'edit'])->name('produk-edit');
Route::put('/produk/{id}', [App\Http\Controllers\DashboardProduk::class, 'update'])->name('produk-update');
Route::get('/produk/{id}/destroy', [App\Http\Controllers\DashboardProduk::class, 'destroy'])->name('produk-destroy');



// routes profile
Route::get('/profile', [App\Http\Controllers\DashboardProfile::class, 'index'])->name('profile');
