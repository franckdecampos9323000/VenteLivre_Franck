<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthAdminController extends Controller
{
    public function adminLogin()
    {
        return view('auth.admin.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            // Vérifiez si l'utilisateur a le rôle "Client"
            if ($user->hasRole('Client')) {
                auth()->logout();
                return redirect()->back()->withErrors('Vous n\'avez pas la permission de vous connecter en tant que "Administrateur".');
            }

            if ($user->status) {
                return redirect()->route('home');
            } else {
                auth()->logout();
                return redirect()->back()->withErrors('Votre compte est désactivé. Veuillez contacter l\'administrateur.');
            }
        }

        return redirect()->back()->withErrors('Les informations sont incorrectes');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('adminLogin');
    }
}
