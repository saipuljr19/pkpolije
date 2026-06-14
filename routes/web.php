<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProgramKerjaController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [ProgramKerjaController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/berita/create', function () {
        return view('admin.berita.create');
    })->name('admin.berita.create');

    Route::post('/admin/berita', [BeritaController::class, 'store'])
        ->name('admin.berita.store');
    // Route::post('/admin/berita', function () {
    //     return back()->with('success', 'Berita berhasil disimpan.');
    // })->name('admin.berita.store');
    Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])
        ->name('admin.berita.update');

    Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])
    ->name('admin.berita.edit');

    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])
        ->name('admin.berita.destroy');

    Route::delete('/admin/gambar/{id}', [BeritaController::class, 'destroyGambar']
        )->name('admin.gambar.destroy');

    Route::get('/admin/program/create', function () {
        return view('admin.program.create');
    })->name('admin.program.create');

    Route::post(
    '/admin/program',
    [ProgramKerjaController::class, 'store']
    )->name('admin.program.store');

    Route::get(
        '/admin/program/{id}/edit',
        [ProgramKerjaController::class, 'edit']
    )->name('admin.program.edit');

    Route::put(
        '/admin/program/{id}',
        [ProgramKerjaController::class, 'update']
    )->name('admin.program.update');

    Route::delete(
        '/admin/program/{id}',
        [ProgramKerjaController::class, 'destroy']
    )->name('admin.program.destroy');
});

require __DIR__.'/auth.php';
