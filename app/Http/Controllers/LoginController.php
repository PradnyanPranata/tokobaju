<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
    
            $user = User::where('email', $credentials['email'])->first();
    
            if ($user && Hash::check($credentials['password'], $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();
    
                if ($user->is_admin == 1) {
                    return redirect()->intended('tampilanadmin');
                } else {
                    return redirect()->intended('uts');
                }
            }
    
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
    
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
    
            return back()->withErrors([
                'error' => 'An unexpected error occurred. Please try again later.',
            ]);
        }
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

