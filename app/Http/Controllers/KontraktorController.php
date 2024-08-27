<?php

namespace App\Http\Controllers;

use App\Models\Kontraktor;
use Illuminate\Http\Request;

class KontraktorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboardadmin.datakontraktor.daftarkontraktor');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardadmin.datakontraktor.tambahkontraktor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontraktor $kontraktor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontraktor $kontraktor)
    {
        return view('dashboardadmin.datakontraktor.ubahkontraktor');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontraktor $kontraktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontraktor $kontraktor)
    {
        //
    }
}
