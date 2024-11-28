<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function pembimbingAkademikDashboard()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('pembimbingakademik.dashboard', compact('user')); // Mengirim variabel $user ke view
    }

    public function mahasiswaDashboard()
    {
        // Get the authenticated user
        $user = Auth::user();
    
        // Retrieve the mahasiswa record based on the authenticated user's email
        $mahasiswa = User::where('email', $user->email)->firstOrFail();
    
        // Pass the necessary user data to the view
        return view('mahasiswa.dashboard', [
            'user' => $mahasiswa // Pass the whole mahasiswa object
        ]);
    }
    public function herregistrasi()
    {
        return view('mahasiswa.herreg'); // Adjust the view path as necessary
    }

    // public function kaprodiDashboard()
    // {
    //     return view('kaprodi.dashboard');
    // }

    public function dekanDashboard()
    {
        return view('dekan.dashboard');
    }

    public function bagianAkademikDashboard()
    {
        return view('bagianakademik.dashboard');
    }

    public function kaprodiDashboard()
    {
        // Get the authenticated user
        $user = Auth::user();
    
        // Retrieve the mahasiswa record based on the authenticated user's email
        $kaprodi = User::where('email', $user->email)->firstOrFail();
    
        // Pass the necessary user data to the view
        return view('kaprodi.dashboard', [
            'user' => $kaprodi // Pass the whole mahasiswa object
        ]);
    }

}
