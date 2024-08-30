<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DataUserController extends Controller
{
    public function index() // view data user
    {
        $user = User::all();
        return view("dashboardadmin.datauser.viewdatauser", [
            'user' => $user
        ]);
    }

    public function deleteUser(User $user) // hapus data user
    {
        $user->delete();
        return redirect('/datauser')->with('success', 'User berhasil di hapus!');
    }
}
