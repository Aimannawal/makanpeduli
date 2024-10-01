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
    Route::get('/admin', [DonationController::class, 'adminIndex'])->name('admin.index');
    Route::post('/admin/approve/{donationRequest}', [DonationController::class, 'approveRequest'])->name('admin.approve');
});

Route::middleware(['auth', 'role:toko'])->group(function(){
    Route::get('/toko', [DonationController::class, 'index'])->name('toko.index');
    Route::get('/toko/create', [DonationController::class, 'create'])->name('toko.create');
    Route::post('/toko/store', [DonationController::class, 'store'])->name('toko.store');
});



require __DIR__.'/auth.php';
