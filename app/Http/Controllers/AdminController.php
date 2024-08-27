<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() // view untuk admin
    {
        return view("dashboardadmin.layouts.home");
    }
}
