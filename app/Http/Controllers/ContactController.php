<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view("dashboardadmin.datacontact.daftarcontact", [
            'contact' => $contact
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboardadmin.datacontact.tambahcontact");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'pekerjaan' => 'required',
            'gambar' => 'nullable|required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $file = $request->file('gambar');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('images', $fileName, 'public');
        $validateData['gambar'] = '/storage/' . $path;

        Contact::create($validateData);
        return redirect('/admin/datacontact')->with('success', 'Data kontak berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view("dashboardadmin.datacontact.ubahcontact", [
            "contact" => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'pekerjaan' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($request->has('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $fileName, 'public');
            $validateData['gambar'] = '/storage/' . $path;
        }

        $contact->update($validateData);
        return redirect('/admin/datacontact')->with('success', 'Data kontak berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect('/admin/datacontact')->with('success', 'Data kontak berhasil dihapus!');
    }
}
