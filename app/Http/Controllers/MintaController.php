<?php

namespace App\Http\Controllers;

use App\Models\Minta;
use Illuminate\Http\Request;

class MintaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('minta');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('minta');
    }

    // Menyimpan data dari form
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Simpan hanya nama dan deskripsi ke database
        Minta::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
