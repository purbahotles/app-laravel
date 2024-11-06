<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class DashboardController extends Controller
// {
//     //
// }


// app/Http/Controllers/DashboardController.php
// namespace App\Http\Controllers;
// use Illuminate\Http\Request;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total pengguna terdaftar
        $registeredUsers = User::count();

        // Menghitung total pengguna dengan status 'active'
        $activeUsers = User::where('status', 'active')->count();

        // Mengirim data ke view dashboard
        return view('dashboard', compact('registeredUsers', 'activeUsers'));
    }
}
