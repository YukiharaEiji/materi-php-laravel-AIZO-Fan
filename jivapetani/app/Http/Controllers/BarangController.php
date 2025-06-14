<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    // Menampilkan daftar barang milik petani
    public function petaniIndex()
    {
        $barangs = Barang::where('user_id', Auth::id())->get();
        return view('barang.index', compact('barangs'));
    }

    // Menampilkan semua barang untuk admin
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    // Form tambah barang
    public function create()
    {
        return view('barang.create');
    }

    // Proses simpan barang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $barang = new Barang();
        $barang->nama = $request->nama;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        $barang->user_id = Auth::id();

        if ($request->hasFile('gambar')) {
            $barang->gambar = $request->file('gambar')->store('barang', 'public');
        }

        $barang->save();

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.barang.index' : 'petani.barang.index';
        return redirect()->route($redirectRoute)->with('success', 'Barang berhasil ditambahkan.');
    }

    // Menampilkan detail barang
    public function show(Barang $barang)
    {
        return view('barang.detail', compact('barang'));
    }

    // Form edit barang
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    // Proses update barang
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $barang->nama = $request->nama;
        $barang->stok = $request->stok;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($barang->gambar && Storage::exists('public/' . $barang->gambar)) {
                Storage::delete('public/' . $barang->gambar);
            }

            // Simpan gambar baru
            $barang->gambar = $request->file('gambar')->store('barang', 'public');
        }

        $barang->save();

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.barang.index' : 'petani.barang.index';
        return redirect()->route($redirectRoute)->with('success', 'Barang berhasil diperbarui.');
    }

    // Hapus barang
    public function destroy(Barang $barang)
    {
        // Hapus gambar dari storage
        if ($barang->gambar && Storage::exists('public/' . $barang->gambar)) {
            Storage::delete('public/' . $barang->gambar);
        }

        $barang->delete();

        $redirectRoute = Auth::user()->role === 'admin' ? 'admin.barang.index' : 'petani.barang.index';
        return redirect()->route($redirectRoute)->with('success', 'Barang berhasil dihapus.');
    }
}
