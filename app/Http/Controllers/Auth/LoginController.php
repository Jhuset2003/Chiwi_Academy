<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //validar informacion
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        //Iniciar la sesión
        if (!auth()->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return back()->with('status', 'Usuario o contraseña incorrectos');
        };

        return redirect()->route('dashboard');
    }
}
