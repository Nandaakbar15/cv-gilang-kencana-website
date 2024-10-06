<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontraktor;

class UserController extends Controller
{
    public function index() // view halaman dashboard user
    {
        return view("dashboard.layouts.home");
    }

    public function about() // view halaman about
    {
        return view("dashboard.partials.about");
    }

    public function contact() // view halaman contact perusahaan CV Gilang Kencana
    {
        return view("dashboard.contact.viewcontact");
    }

    public function listKontraktor() // view halaman list kontraktor
    {
        $kontraktor = Kontraktor::all();
        return view("dashboard.listkontraktor.viewlistkontraktor", [
            "kontraktor" => $kontraktor
        ]);
    }
}
