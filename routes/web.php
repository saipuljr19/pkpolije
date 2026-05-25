<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/berita/create', function () {
        return view('admin.berita.create');
    })->name('admin.berita.create');

    Route::post('/admin/berita', function () {
        return back()->with('success', 'Berita berhasil disimpan.');
    })->name('admin.berita.store');

    Route::get('/admin/program/create', function () {
        return view('admin.program.create');
    })->name('admin.program.create');

    Route::post('/admin/program', function () {
        return back()->with('success', 'Program kerja berhasil disimpan.');
    })->name('admin.program.store');
});

require __DIR__.'/auth.php';
