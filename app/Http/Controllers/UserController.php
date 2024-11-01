<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        if (auth()->check())
            return redirect()->route('home');
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        if (auth()->check())
            return redirect()->route('home');

        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8']
        ]);


        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard');
        } else
            return redirect()->route('login')->with('error', 'ایمیل یا رمز عبور اشتباه است.');
    }

    public function register()
    {
        if (auth()->check())
            return redirect()->route('dashboard');

        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        if (auth()->check())
            return redirect()->route('dashboard');

        $request->validate([
            'first_name' => ['required', 'string', 'min:3'],
            'last_name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'phone' => ['required', 'numeric', 'digits:11', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $user = User::create($request->all());

        event(new Registered($user));
        auth()->login($user);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
