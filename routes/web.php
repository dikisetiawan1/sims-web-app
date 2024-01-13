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

Route::get('/', [App\Http\Controllers\DashboardProduk::class, 'index'])->name('dashboard-produk');
Route::get('/tambah-produk', [App\Http\Controllers\DashboardProduk::class, 'create'])->name('tambah-produk');
Route::get('/dashboard-profile', [App\Http\Controllers\DashboardProfile::class, 'index'])->name('dashboard-profile');