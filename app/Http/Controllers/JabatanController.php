<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index(){
        $jabatans = Jabatan::all();
       return view("jabatan.index",compact("jabatans"));
    }

    public function create()
    {
        return view('jabatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required',
            'priode' => 'required',
        ]);

        Jabatan::create($request->all());

        return redirect()->route('jabatan.index')
            ->with('success', 'Data jabatan berhasil ditambahkan.');
    }

    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', compact('jabatan'));
    }


    public function update(Request $request, Jabatan $jabatan)
    {
        $jabatan->update($request->all());

        return redirect()->route('jabatan.index')
            ->with('success', 'Data jabatan berhasil diupdate.');
    }

    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();

        return redirect()->route('jabatan.index')
            ->with('success', 'Data Jabatan berhasil dihapus.');
    }



}
