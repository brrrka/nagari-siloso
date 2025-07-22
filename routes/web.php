<?php
// routes/web.php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\PopulationController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminUmkmController;
use App\Http\Controllers\Admin\AdminTourismController;
use App\Http\Controllers\Admin\AdminPopulationController;
use App\Http\Controllers\Admin\AdminEventController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static Pages
Route::get('/profil', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/visi-misi', function () {
    return view('pages.vision-mission');
})->name('vision-mission');

Route::get('/struktur-organisasi', function () {
    return view('pages.organization-structure');
})->name('organization-structure');

// Dynamic Pages
Route::get('/berita', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/berita/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm');
Route::get('/umkm/{umkm}', [UmkmController::class, 'show'])->name('umkm.show');

Route::get('/wisata', [TourismController::class, 'index'])->name('tourism');
Route::get('/wisata/{tourism}', [TourismController::class, 'show'])->name('tourism.show');

Route::get('/data-penduduk', [PopulationController::class, 'index'])->name('population.index');

Route::get('/peta', [MapController::class, 'index'])->name('map');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Articles
    Route::resource('articles', AdminArticleController::class);

    // Gallery
    Route::resource('galleries', AdminGalleryController::class);

    // UMKM
    Route::resource('umkm', AdminUmkmController::class);

    // Tourism
    Route::resource('tourism', AdminTourismController::class);

    // Population Data
    Route::resource('population', AdminPopulationController::class);

    // Events
    Route::resource('events', AdminEventController::class);
});

require __DIR__ . '/auth.php';
