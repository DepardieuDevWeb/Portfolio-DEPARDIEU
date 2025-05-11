<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        // User::create([
        //     'name' => "Nguetebe Pascal Shadrac Depardieu",
        //     'email' => 'depardieu.nguetebe@gmail.com',
        //     'password' => Hash::make('dep@rdieu97'),
        // ]);
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->withErrors([
            'email' => 'Identifiant ou mot de passe incorrect'
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('success', 'Vous êtes maintenant déconnecté');
    }
}
