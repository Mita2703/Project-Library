<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::with('kategori')->orderBy('id','desc')->get();
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('buku.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku',
            'judul'     => 'required|string|max:255',
            'penulis'   => 'required|string|max:255',
            'penerbit'  => 'nullable|string|max:255',
            'tahun'     => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'id_kategori' => 'required|exists:kategori,id',
        ]);

        Buku::create($request->only(['kode_buku','judul','penulis','penerbit','tahun','id_kategori']));

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    public function edit(Buku $buku)
    {
        $kategoris = Kategori::all();
        return view('buku.edit', compact('buku', 'kategoris'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku,'.$buku->id,
            'judul'     => 'required|string|max:255',
            'penulis'   => 'required|string|max:255',
            'penerbit'  => 'nullable|string|max:255',
            'tahun'     => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'id_kategori' => 'required|exists:kategori,id',
        ]);

        $buku->update($request->only(['kode_buku','judul','penulis','penerbit','tahun','id_kategori']));

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diupdate.');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}