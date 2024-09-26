<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function(){
    // Route::get('/admin/index', [AdminController::class, 'index']);  
    // Route::resource('admin', AdminController::class);
    Route::get('/admin/index', [DonationController::class, 'adminIndex'])->name('admin.index');
    Route::post('/admin/approve/{donationRequest}', [DonationController::class, 'approveRequest'])->name('admin.approve');
});

Route::middleware(['auth', 'role:toko'])->group(function(){
    Route::get('/toko/index', [TokoController::class, 'index']);
    Route::resource('toko', TokoController::class);
    Route::get('/toko/create', [DonationController::class, 'createRequest'])->name('toko.create');
    Route::post('/toko/store', [DonationController::class, 'storeRequest'])->name('toko.storeRequest');
});



require __DIR__.'/auth.php';
