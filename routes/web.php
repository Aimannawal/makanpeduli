<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\MintaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function(){
    Route::get('/admin', [DonationController::class, 'admin'])->name('toko.admin');
    Route::post('/admin/update-status', [DonationController::class, 'updateStatus'])->name('admin.update.status');

});

Route::middleware('auth')->group(function(){
    Route::get('/toko', [DonationController::class, 'index'])->name('toko.index');
    Route::get('toko/create', [DonationController::class, 'create'])->name('toko.create');
    Route::post('toko/store', [DonationController::class, 'store'])->name('toko.store');
    Route::get('/toko/profile', function() {
        return view('toko.profile');
    })->name('toko.profile');
    Route::post('/toko/profile-update', [DonationController::class, 'updateProfile'])->name('toko.profile.update');
});



require __DIR__.'/auth.php';
