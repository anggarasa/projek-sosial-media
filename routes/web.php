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

    // profile
    Route::get('/profile-user', function() {
        return view('home.profile', [
            'title' => 'My Profile',
            'user' => auth()->user(),
        ]);
    });

    // password update
    Route::get('/password', function () {
        return view('profile.edit', [
            'title' => 'Change Password',
        ]);
    })->name('password');
    
    // password update
    Route::get('/password', function () {
        return view('profile.edit', [
            'title' => 'Change Password',
        ]);
    })->name('password');

    // fitur posting 
    Route::get('/posting', function() {
        return view('home.posting.posting', [
            'title' => 'Posting'
        ]);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
