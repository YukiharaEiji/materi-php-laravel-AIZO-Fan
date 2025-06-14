<?php

namespace App\Http\Controllers;

use App\Models\materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $materi = materi::all();
        return view('materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('materi.create');     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'namaMK' => 'required',
            'materi' => 'required',
            'dosen' => 'required',
            'tanggal' => 'required|date',
        ]);

        Materi::create($request->all());
        return redirect()->route('admin.materi.index')->with('success', 'Data berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
        public function detail($id)
    {
      
    }
    public function show(string $id)
    {
        $materi = Materi::findOrFail($id);
        return view('materi.show', compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $materi = Materi::findOrFail($id);
        return view('materi.edit', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaMK' => 'required|string|max:255',
            'materi' => 'required|string',
            'dosen' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        $materi = Materi::findOrFail($id);

        $materi->update([
            'namaMK' => $request->namaMK,
            'materi' => $request->materi,
            'dosen' => $request->dosen,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);
        $materi->delete();

        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil dihapus.');
    }
}
