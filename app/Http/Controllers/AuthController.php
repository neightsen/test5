<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm() {
        return view('auth.register');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email|confirmed',
            'password' => 'required|string|min:4',
        ]);

        $user = User::create($request->only('name', 'email', 'password'));

        Auth::login($user);

        return redirect()->route('showLots');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('showLots');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('showLots');
    }
}
