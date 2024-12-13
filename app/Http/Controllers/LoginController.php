<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba login menggunakan kredensial
        if (Auth::attempt($credentials)) {
            \Log::info('Login berhasil untuk user: ' . Auth::user()->email);
            $request->session()->regenerate();

            // Redirect sesuai dengan peran pengguna setelah login
            if (Auth::User()->is_admin == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('uts');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
        \Log::warning('Login gagal untuk email: ' . $credentials['email']);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidasi sesi dan token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

