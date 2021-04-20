<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{

    public function signInUp(Request $request)
    {
        $validated = $request->validate([
        "username" => "required",
        "email" => "required",
        "password" => "required",
        "password_confirmation" => "required|same:password"
        ]);
        $user = new User();
        $user->username = $validated["username"];
        $user->email = $validated["email"];
        $user->password = Hash::make($validated["password"]);
        $user->save();
        Auth::login($user);
        
        return redirect('/login')->with('success','Vous êtes bien enregistré, Connectez-vous');
    }

    public function loginIn(Request $request)
    {
        $validated = $request->validate([
        "username" => "required",
        "password" => "required",
        ]);
        if (Auth::attempt($validated)) {
        return redirect()->intended('/');
        }    
        return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success','Vous êtes bien déconnectez');
    }
}

