<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

// Guest Routes
Route::middleware('xss_protect')->group(function () {
    Route::get('/', [GuestController::class, 'home'])->name('home');
    Route::get('/tentang-kami', [GuestController::class, 'about'])->name('about');
    Route::get('/struktur-organisasi', [GuestController::class, 'structure'])->name('structure');
    Route::get('/program', [GuestController::class, 'programs'])->name('programs');
    Route::get('/program/{id}', [GuestController::class, 'programDetail'])->name('program.detail');
    Route::get('/berita', [GuestController::class, 'news'])->name('news');
    Route::get('/berita/{slug}', [GuestController::class, 'newsDetail'])->name('news.detail');
    Route::get('/galeri', [GuestController::class, 'gallery'])->name('gallery');
    Route::get('/kontak', [GuestController::class, 'contact'])->name('contact');
    Route::post('/kontak', [GuestController::class, 'sendContact'])->name('contact.send');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Berita Management
    Route::resource('berita', \App\Http\Controllers\Admin\BeritaController::class);

    // Galeri Management
    Route::resource('galeri', \App\Http\Controllers\Admin\GaleriController::class);

    // Program Management
    Route::resource('program', \App\Http\Controllers\Admin\ProgramController::class);

    // Struktur Organisasi Management
    Route::resource('struktur-organisasi', \App\Http\Controllers\Admin\StrukturOrganisasiController::class);

    // Tentang Kami Management
    Route::get('tentang-kami', [\App\Http\Controllers\Admin\TentangKamiController::class, 'edit'])->name('tentang-kami.edit');
    Route::put('tentang-kami', [\App\Http\Controllers\Admin\TentangKamiController::class, 'update'])->name('tentang-kami.update');

    // User Management (Super Admin only)
    Route::middleware('super_admin')->group(function () {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
});

// Sitemap
Route::get('/sitemap.xml', function () {
    $beritas = \App\Models\Berita::where('status', 'published')->get();
    $programs = \App\Models\Program::all();

    return response()->view('sitemap', compact('beritas', 'programs'))->header('Content-Type', 'text/xml');
});
