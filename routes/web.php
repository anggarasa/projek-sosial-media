<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Psr7\Request;

Route::middleware(['auth', 'verified'])->group(function () {
    // Beranda
    Route::get('/Home', function () {
        return view('home.home', [
            'title' => 'Beranda'
        ]);
    })->name('dashboard');

    // Fitur Cari
    Route::get('/cari', function () {
        return view('home.fit-cari.cari', [
            'title' => 'Search',
        ]);
    })->name('cari');

    // password update
    Route::get('/password', function () {
        return view('profile.edit', [
            'title' => 'Change Password',
        ]);
    })->name('password');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
