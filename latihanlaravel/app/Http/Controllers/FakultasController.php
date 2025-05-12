<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $fakultas = [
        [
            'id' => 1,
            'nama' => 'Fakultas Ilmu Komputer & Rekayasa',
            'gambar' => 'mdpsuperstore.jpg',
            'deskripsi' => 'FIKR terus mendorong riset di bidang kecerdasan buatan, sistem terdistribusi, rekayasa perangkat lunak, serta keamanan siber, guna memberikan kontribusi nyata bagi kemajuan ilmu pengetahuan dan teknologi di tingkat nasional maupun internasional.'
        ],
        [
            'id' => 2,
            'nama' => 'Fakultas Ekonomi & Bisnis',
            'gambar' => 'mdpkampus.jpg',
            'deskripsi' => 'Dengan didukung oleh dosen profesional dan praktisi industri, FEB aktif menjalin kerja sama dengan perusahaan, lembaga keuangan, serta institusi internasional. Mahasiswa FEB dibekali kemampuan analisis, kepemimpinan, dan kewirausahaan yang relevan dengan kebutuhan dunia usaha saat ini.'
        ],
    ];
    

    public function index()
{
    $fakultas = [
        [
            'id' => 1, 
            'nama' => 'Fakultas Ilmu Komputer & Rekayasa', 
            'gambar' => 'mdpsuperstore.jpg',
            'deskripsi' => 'Fakultas Ilmu Komputer & Rekayasa (FIKR) merupakan pusat pengembangan pendidikan dan riset di bidang teknologi informasi dan rekayasa sistem. FIKR berkomitmen untuk menghasilkan lulusan yang kompeten, inovatif, dan adaptif terhadap perkembangan teknologi digital. Fakultas ini menyediakan kurikulum yang berbasis kebutuhan industri, serta dilengkapi dengan fasilitas laboratorium modern dan program magang industri untuk mendukung pembelajaran praktis.'
        ],
        [
            'id' => 2, 
            'nama' => 'Fakultas Ekonomi & Bisnis', 
            'gambar' => 'mdpkampus.jpg',
            'deskripsi' => 'Fakultas Ekonomi & Bisnis (FEB) adalah lembaga akademik yang berfokus pada pengembangan keilmuan di bidang ekonomi, manajemen, dan bisnis modern. FEB bertujuan mencetak profesional yang unggul, etis, dan mampu bersaing di pasar global melalui pendekatan pembelajaran yang integratif antara teori dan praktik bisnis.

'
        ]
    ];

    return view('fakultas.index', compact('fakultas'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function createForm()
     {
         return view('fakultas.create');
     }

    public function create(Request $request)
    {
        return redirect()->route('fakultas.index');
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
        $fakultas = null;
        foreach ($this->fakultas as $fakultasItem) {
            if ($fakultasItem['id'] == $id) {
                $fakultas = $fakultasItem;
                break;
            }
        }
    
        if (!$fakultas) {
            return redirect()->route('fakultas.index')->with('error', 'Fakultas tidak ditemukan');
        }
    
        return view('fakultas.detail', ['fakultas' => $fakultas]);
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
       return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil dihapus');
    }
}

