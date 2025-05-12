<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $dosen = [
    [
        'id' => 1,
        'nama' => 'Nur Rachmat, M.Kom',
        'gambar' => 'dosen1.jpg',
        'deskripsi' => 'S2 Universitas Sriwijaya – Magister Informatika'
    ],
    [
        'id' => 2,
        'nama' => 'Derry Alamsyah, S.Si, M.Kom, M.Pd',
        'gambar' => 'dosen2.jpg',
        'deskripsi' => 'S2 Universitas Indonesia – Magister Ilmu Komputer'
    ],
    [
        'id' => 3,
        'nama' => 'Tinaliah, M.Kom',
        'gambar' => 'dosen3.jpg',
        'deskripsi' => 'S2 Universitas Indonesia – Magister Ilmu Komputer'
    ],
    [
        'id' => 2,
        'nama' => 'Siska Devella, M.Kom',
        'gambar' => 'dosen4.jpg',
        'deskripsi' => 'S2 Universitas Indonesia – Magister Ilmu Komputer'
    ],
    ];

    public function index()
    {
        $dosen = $this->dosen;
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function createForm()
    {
        return view('dosen.create');
    }

    public function create(Request $request)
    {
        return redirect()->route('dosen.index')->with('success', 'Prodi berhasil ditambah (gimmick)');

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
        $dosen = null;
        foreach ($this->dosen as $dosenItem) {
            if ($dosenItem['id'] == $id) {
                $dosen = $dosenItem;
                break;
            }
        }

        if (!$dosen) {
            return redirect()->route('dosen.index')->with('error', 'Dosen tidak ditemukan');
        }

        return view('dosen.detail', ['dosen' => $dosen]);
    }

    public function show(string $id)
    {
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
  return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus');    }
}
