<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('mahasiswa/herreg', function () {
    return view('mahasiswa/herreg');
});

Route::get('mahasiswa/akademik', function () {
    return view('mahasiswa/akademik');
});

Route::get('mahasiswa/isiirs', function () {
    return view('mahasiswa/isiirs');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

//mahasiswa
Route::get('mahasiswa/dashboard', [HomeController::class, 'mahasiswaDashboard'])->name('mahasiswa.dashboard');

//dekan
Route::get('dekan/dashboard', [HomeController::class, 'dekanDashboard'])
    ->middleware(['auth', 'dekan'])
    ->name('dekan.dashboard');

//bagian akademik
Route::get('bagianakademik/dashboard', [HomeController::class, 'bagianakademikDashboard'])
    ->middleware(['auth', 'bagianakademik'])
    ->name('bagianakademik.dashboard');

//kaprodi
Route::get('kaprodi/dashboard', [HomeController::class, 'kaprodiDashboard'])
    ->middleware(['auth', 'kaprodi'])
    ->name('kaprodi.dashboard');

//pembimbing akademik
Route::get('pembimbingakademik/dashboard', [HomeController::class, 'pembimbingakademikDashboard'])
    ->middleware(['auth', 'pembimbingakademik'])
    ->name('pembimbingakademik.dashboard');


require __DIR__.'/auth.php';
