<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Preencha com seu email.',
            'password.required' => 'Você precisa informar sua senha.',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('pessoas');
        }
 
        return back()->withErrors([
            'email' => 'Email ou senha inválidos!',
        ])->onlyInput('email');
    }

    public function create()
    {
        //SOMENTE PARA TESTES
        $user = new User;
        $user->email = 'teste@teste.com';
        $user->password = Hash::make(123);
        $user->save();

    }
}
