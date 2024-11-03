<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pembimbingAkademikDashboard()
    {
        return view('pembimbingakademik.dashboardpa');
    }

    public function mahasiswaDashboard()
    {
        return view('mahasiswa.dashboard');
    }

    public function kaprodiDashboard()
    {
        return view('kaprodi.dashboard');
    }

    public function dekanDashboard()
    {
        return view('dekan.dashboard');
    }

    public function bagianAkademikDashboard()
    {
        return view('bagianakademik.dashboard');
    }
}
