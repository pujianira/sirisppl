<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/herreg', function () {
    return view('herreg');
});

Route::get('/akademik', function () {
    return view('akademik');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//pembimbing akademik
Route::get('pembimbingakademik/dashboardpa', function () {
    return view('pembimbingakademik/dashboardpa');
});

Route::get('pembimbingakademik/perwalian', function () {
    return view('pembimbingakademik/perwalian');
});

Route::get('pembimbingakademik/halamanreview', function () {
    return view('pembimbingakademik/halamanreview');
});

Route::get('pembimbingakademik/halamanirsmhs', function () {
    return view('pembimbingakademik/halamanirsmhs');
});

require __DIR__.'/auth.php';
