<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $mahasiswa = [
        [
            'id' => 1,
            'nama' => 'Muhammad Irfan',
            'npm' => '2428250051',
            'prodi' => 'Teknik Informatika'
        ],
        [
            'id' => 2,
            'nama' => 'Bombardilo Crocodilo',
            'npm' => '2428250055',
            'prodi' => 'Sistem Informasi'
        ],
        [
            'id' => 3,
            'nama' => 'tung tung tung sahur',
            'npm' => '2428250041',
            'prodi' => 'Teknik Elektro'
        ]
    ];
    public function index()
    {
        $mahasiswa = $this->mahasiswa;
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createForm()
    {
        return view('mahasiswa.create');
    }

    public function create(Request $request)
    {
        // Simulasi penyimpanan data mahasiswa
        return redirect()->route('mahasiswa.index'); 
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
  public function detail($id)
    {
        $mahasiswa = collect($this->mahasiswa)->firstWhere('id', (int)$id);

        if (!$mahasiswa) {
            abort(404, 'Mahasiswa tidak ditemukan');
        }

        return view('mahasiswa.detail', compact('mahasiswa'));
    }
       public function show($id)
    {
       return view(view:"materi.detail");
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
        // Hanya redirect untuk "gimmick" hapus
 return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus');     }
}
