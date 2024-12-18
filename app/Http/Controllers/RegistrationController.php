<?php

namespace App\Http\Controllers;

use App\Models\User; // Gunakan User dengan huruf kapital
use Illuminate\Http\Request;
use Hash; // Tambahkan untuk hashing password

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('signup');
    }
    
    public function signup (Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed', // pastikan password dan password_confirmation ada di form
        ]);

        // Simpan data ke database setelah hashing password
        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash password sebelum disimpan
            'is_admin' => 0, // Default bukan admin
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('login.form')->with('success', 'Registrasi berhasil!');
    }
}
