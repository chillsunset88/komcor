<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user && method_exists($user, 'isAdmin') && $user->isAdmin()) {
                return redirect()->intended(route('admin.dashboard'));
            }

            if ($user && method_exists($user, 'isAuthor') && $user->isAuthor()) {
                return redirect()->intended(route('posts.index'));
            }

            return redirect()->intended(route('home'));
        }

        return back()
            ->withErrors(['email' => 'Email atau password salah.'])
            ->onlyInput('email');
    }
}