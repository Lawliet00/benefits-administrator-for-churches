<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{
    public function ShowLoginForm()
    {
        return view('auth.login');
    }
    public function login()
    {
        $credentials = $this->validate(request(),[
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()
                    ->withErrors(['password' => 'El usuario o contraseña no coinciden.'])
                    ->withInput(request(['name']));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
