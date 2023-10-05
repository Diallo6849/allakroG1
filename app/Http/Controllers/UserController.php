<?php

namespace App\Http\Controllers;

use App\Models\OffreEmploi;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function redirectTo()
    {
        $role = Auth::user()->role;
        switch ($role) {
            case 'user':
                return '/profile';
            case 'admin':
                return '/admin'; // C'est l'URL par défaut de Filament, modifiez-la si vous l'avez changée
            default:
                return '/logins';

        }
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect($this->redirectTo()); // Utilisez la méthode redirectTo() pour la redirection
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('profile');
    }

    public function profile()
    {
        $offreemploi = OffreEmploi::all();
        return view('auth.profile', compact('offreemploi'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }




}
