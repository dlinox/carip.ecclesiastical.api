<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

use App\Http\Controllers\Controller;


class AuthController extends Controller
{

    // use App\Http\Controllers\Auth\AuthenticatesUsers;

    public function login()
    {
        return Inertia::render("auth/login");
    }

    public function signIn(Request $request)
    {
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);


        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'Administrador') {
                return redirect('/a');
            } elseif (auth()->user()->role == 'Secretaria') {
                return redirect('/s');
            }
        }

        return back()->withErrors([
            "email" => "The provided credentials do not match our records."
        ]);
    }

    public function signOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
