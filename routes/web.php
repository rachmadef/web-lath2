<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/gallery', [GalleryController::class, 'index'])
    ->name('gallery.index');

Route::get('/gallery/{gallery}', [GalleryController::class, 'show'])
    ->name('gallery.show');
Route::get('/daftar', [RegistrationController::class, 'index'])->name('daftar');

Route::get('/profil', [ProfilController::class, 'show'])
    ->defaults('id', 2)
    ->name('profil');

Route::get('/sejarah', [ProfilController::class, 'show'])
    ->defaults('id', 3)
    ->name('sejarah');

Route::get('/{category:slug}', [NewsController::class, 'index'])
    ->name('news.category');

Route::get('/berita/{slug}', [NewsController::class, 'show'])
    ->name('news.show');
