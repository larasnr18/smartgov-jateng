<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        return redirect('login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $hashedPassword = $request->password;

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($credentials) {
            $credentials = ['email' => $email, 'password' => $hashedPassword];
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $request->session()->put('loggedUserEmail', $email);
                return redirect('/home');
            }

            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
