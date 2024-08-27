<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() // view halaman login
    {
        return view("login");
    }

    public function login(Request $request) // logic login
    {
        $validate = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if(Auth::attempt($validate)) {
            $request->session()->regenerate();

            if(auth()->user()->role === 'admin'){
                return redirect()->intended('/admin/home'); // jika usernya adalah admin maka masuk ke halaman dashboard admin
            }   else {
                return redirect()->intended('/user/dashboarduser'); // jika usernya bukan admin maka masuk ke halaman user
            }
        }

        return back()->with('loginError', 'Login gagal! Email atau Password salah!');
    }

    public function logout(Request $request) // logout
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
