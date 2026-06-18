<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\GaleriController;

/*
|--------------------------------------------------------------------------
| Halaman Publik (Company Profile)
|--------------------------------------------------------------------------
*/

Route::get('/', [CompanyController::class, 'home']);

Route::get('/about', [CompanyController::class, 'about']);

Route::get('/services', [CompanyController::class, 'services']);

Route::get('/products', [CompanyController::class, 'products']);

Route::get('/artikel', [CompanyController::class, 'artikel']);

Route::get('/artikel/{slug}', [CompanyController::class, 'detailArtikel'])->name('artikel.detail');

Route::get('/contact', [CompanyController::class, 'contact']);

Route::get('/galeri', [CompanyController::class, 'galeri']);

/*
|--------------------------------------------------------------------------
| Autentikasi Admin (Manual, pakai Session Laravel)
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Halaman Admin (dilindungi middleware 'admin')
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('artikel', ArtikelController::class)->except(['show']);

    Route::get('/produk/export-pdf', [ProdukController::class, 'exportPdf'])->name('produk.pdf');
    Route::resource('produk', ProdukController::class)->except(['show']);

    Route::resource('layanan', LayananController::class)->except(['show']);

    Route::resource('galeri', GaleriController::class)->except(['show']);

    Route::get('/profil', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil', [ProfilController::class, 'update'])->name('profil.update');

});
