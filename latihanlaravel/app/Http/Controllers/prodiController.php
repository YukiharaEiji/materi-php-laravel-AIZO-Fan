<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        protected $prodi = [
        [
            'id' => 1,
            'nama' => 'Teknik Informatika',
            'kaprodi' => 'Dr. M. Rizky Pribadi, M.Kom',
            'fakultas' => 'Ilmu Komputer & Rekayasa',
            'akreditasi' => 'B'
        ],
        [
            'id' => 2,
            'nama' => 'Sistem Informasi',
            'kaprodi' => 'Ahmad Farisi, M.Kom',
            'fakultas' => 'Ilmu Komputer & Rekayasa',
            'akreditasi' => 'B'
        ],
        [
            'id' => 3,
            'nama' => 'Teknik Elektro',
            'kaprodi' => 'Eka Puji Widiyanto, S.T., M.Kom',
            'fakultas' => 'Ilmu Komputer & Rekayasa',
            'akreditasi' => 'C'
        ],
        [
            'id' => 4,
            'nama' => 'Menejemen Informatika',
            'kaprodi' => 'Dicky Pratama, S.Kom., M.T.I',
            'fakultas' => 'Ilmu Komputer & Rekayasa',
            'akreditasi' => 'B'
        ],
        [
            'id' => 5,
            'nama' => 'Akuntansi',
            'kaprodi' => 'Dr. Siti Khairani, S.E.Ak., M.SiI',
            'fakultas' => 'Ekonomi & Bisnis',
            'akreditasi' => 'B'
        ],
        [
            'id' => 6,
            'nama' => 'Menejemen',
            'kaprodi' => 'Idham Cholid, S.E., M.E',
            'fakultas' => 'Ekonomi & Bisnis',
            'akreditasi' => 'B'
        ],
    ];

        public function index()
    {
        $prodi = $this->prodi;
        return view('prodi.index', compact('prodi'));
    }
    /**
     * Show the form for creating a new resource.
     */

  public function createForm(Request $request)
{
  return view('prodi.create');
}
    
    public function create(Request $request)
    {
        return redirect()->route('prodi.index');
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
    // Cari data prodi berdasarkan ID
    $prodi = collect($this->prodi)->firstWhere('id', (int) $id);

    // Kalau tidak ketemu ➔ 404
    if (!$prodi) {
        abort(404, 'Prodi tidak ditemukan');
    }

    return view('prodi.detail', compact('prodi'));
}


    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
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
 return redirect()->route('prodi.index')->with('success', 'Prodi berhasil dihapus');    
    }
    }

