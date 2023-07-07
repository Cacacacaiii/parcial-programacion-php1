<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use App\Models\User;



class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            throw ValidationException::withMessages([
                'email' => 'Credenciales inválidas',
            ])->redirectTo(route('login'));
        }
    }

    public function register(Request $request)
    {
        $name = $request->input('ingresa_nombre');
        $email = $request->input('ingresa_email');
        $password = $request->input('ingresa_password');

       
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        return redirect('/');
    }

    public function showHome()
{
    $users = User::all();

    return view('home', compact('users'));
}
}



