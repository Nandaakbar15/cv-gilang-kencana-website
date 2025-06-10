<?php

namespace App\Http\Controllers;

use App\Models\Kontraktor;
use Illuminate\Http\Request;

class KontraktorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // view daftar kontraktor
    {
        $kontraktor = Kontraktor::all();
        return view('dashboardadmin.datakontraktor.daftarkontraktor', [
            'kontraktor' => $kontraktor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // view tambah kontraktor
    {
        return view('dashboardadmin.datakontraktor.tambahkontraktor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // logic tambah kontraktor ke database
    {
        $validateData = $request->validate([
            "nama" => "required",
            "alamat_personil" => "required",
            "email" => "required",
            "no_telp" => "required",
            "specialist" => "required",
            "foto" => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
        ]);

        $file = $request->file('foto');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('images', $fileName, 'public');
        $validateData['foto'] = '/storage/' . $path;

        Kontraktor::create($validateData);
        return redirect('/admin/daftarkontraktor')->with('success', 'Data kontraktor berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontraktor $kontraktor) // view edit / ubah data kontraktor
    {
        return view('dashboardadmin.datakontraktor.ubahkontraktor', [
            "kontraktor" => $kontraktor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontraktor $kontraktor) // logic edit / ubah data kontraktor
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat_personil' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'specialist' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($request->has('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $fileName, 'public');
            $validateData['foto'] = '/storage/' . $path;
        }

        $kontraktor->update($validateData);

        return redirect('/admin/daftarkontraktor')->with('success', 'Data Kontraktor berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontraktor $kontraktor) // hapus data kontraktor dari database
    {
        $kontraktor->delete();
        return redirect('/admin/daftarkontraktor')->with('success', 'Data kontraktor berhasil dihapus!');
    }
}
