<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() // view untuk register
    {
        return view("register");
    }

    public function register(Request $request) // logic untuk register
    {
        $validateData = $request->validate([
            'username' => 'required|max:255',
            'password' =>  'required',
            'email' => 'required|email|max:255|unique:users',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Akun berhasil dibuat! Silahkan login!');
    }
}
