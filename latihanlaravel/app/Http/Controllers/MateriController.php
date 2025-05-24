<?php

namespace App\Http\Controllers;

use App\Models\materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//     protected $materi = [
//     [
//         'id' => 1,
//         'title' => 'Pemrograman web P1',
//         'deskripsi' => 'Pengantar Teknologi Web',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-02'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Pemrograman web P2',
//         'deskripsi' => 'HTML',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-05'
//     ],
//     [
//         'id' => 3,
//         'title' => 'Pemrograman web P3',
//         'deskripsi' => 'HTML 5',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-09'
//     ],
//     [
//         'id' => 4,
//         'title' => 'Pemrograman web P4',
//         'deskripsi' => 'CSS',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-12'
//     ],
//     [
//         'id' => 5,
//         'title' => 'Pemrograman web P5',
//         'deskripsi' => 'CSS Lanjutan',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-16'
//     ],
//     [
//         'id' => 6,
//         'title' => 'Pemrograman web P6',
//         'deskripsi' => 'Responsif Web',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-19'
//     ],
//     [
//         'id' => 7,
//         'title' => 'Pemrograman web P7',
//         'deskripsi' => 'Bootstrap',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-23'
//     ],
//     [
//         'id' => 8,
//         'title' => 'Pemrograman web P8',
//         'deskripsi' => 'Javascript',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-26'
//     ],
//     [
//         'id' => 9,
//         'title' => 'Pemrograman web P9',
//         'deskripsi' => 'Fetch API - GET',
//         'dosen' => 'Nur Rachmat, M.Kom',
//         'tanggal' => '2024-09-30'
//     ]
// ];


    public function index()
    {
        $materis = materi::all();
        return view('materi.index', compact('materis'));
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
            'judul' => 'required',
            'materi' => 'required',
            'dosen' => 'required',
            'tanggal' => 'required|date',
        ]);

        Materi::create($request->all());
        return redirect()->route('materi.index')->with('success', 'Data berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
        public function detail($id)
    {
      
    }
    public function show(string $id)
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
    public function destroy($id)
    {
     return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus'); 
    }
}
