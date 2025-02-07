<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationsController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/destinations', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('destinations/{id}', [DestinationController::class, 'show'])->name('destination.show');
});

Route::get('/admin', [ReservationsController::class, 'index'])->middleware(AdminMiddleware::class)->name('reservations.index');

require __DIR__.'/auth.php';
