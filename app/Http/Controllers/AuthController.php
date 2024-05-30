<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function clientAuthenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('clientDashboard');
        }

        return redirect()->back()->withErrors('Les informations sont incorrectes');
    }

    public function clientLogout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

}
