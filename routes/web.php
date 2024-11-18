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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//mahasiswa
Route::middleware(['auth', 'mahasiswa'])->group(function () {
    // Mahasiswa Dashboard
    Route::get('mahasiswa/dashboard', [HomeController::class, 'mahasiswaDashboard'])->name('mahasiswa.dashboard');

    // HER Registrasi
    Route::get('mahasiswa/herreg', function () {
        return view('mahasiswa.herreg');
    })->name('mahasiswa.herreg');

    // Akademik
    Route::get('mahasiswa/akademik', function () {
        return view('mahasiswa.akademik');
    })->name('mahasiswa.akademik');

    // ISIIRS
    Route::get('mahasiswa/isiirs', function () {
        return view('mahasiswa.isiirs');
    })->name('mahasiswa.isiirs');
});

//dekan
Route::get('dekan/dashboard', [HomeController::class, 'dekanDashboard'])
    ->middleware(['auth', 'dekan'])
    ->name('dekan.dashboard');

Route::get('dekan/perkuliahan', function () {
    return view('dekan/perkuliahan');
    });

Route::get('dekan/jadwal', function () {
    return view('dekan/jadwal');
    });

Route::get('dekan/lihatjadwal', function () {
    return view('dekan/lihatjadwal');
    });

//bagian akademik
Route::get('bagianakademik/dashboard', [HomeController::class, 'bagianakademikDashboard'])
    ->middleware(['auth', 'bagianakademik'])
    ->name('bagianakademik.dashboard');

//kaprodi
Route::get('kaprodi/dashboard', [HomeController::class, 'kaprodiDashboard'])
    ->middleware(['auth', 'kaprodi'])
    ->name('kaprodi.dashboard');

//pembimbing akademik
Route::get('mahasiswa/dashboard', [HomeController::class, 'mahasiswaDashboard'])->name('mahasiswa.dashboard');
Route::get('pembimbingakademik/dashboard', [HomeController::class, 'pembimbingAkademikDashboard'])->name('pembimbingakademik.dashboard');
Route::get('pembimbingakademik/perwalian', function () {
    return view('pembimbingakademik/perwalian');
});

Route::get('pembimbingakademik/halamanrevie', function () {
    return view('pembimbingakademik/halamanrevie');
});

Route::get('pembimbingakademik/halamanirsmhs', function () {
    return view('pembimbingakademik/halamanirsmhs');
});

Route::get('pembimbingakademik/halamankhsmhs', function () {
    return view('pembimbingakademik/halamankhsmhs');
});

Route::get('pembimbingakademik/halamantranskripmhs', function () {
    return view('pembimbingakademik/halamantranskripmhs');
});

require __DIR__.'/auth.php';
