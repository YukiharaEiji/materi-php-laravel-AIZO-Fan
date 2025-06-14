<?php

namespace App\Http\Controllers;

use App\Models\DetailPembelian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DetailPembelianController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Jika petani, filter hanya barang miliknya
        if ($user->role === 'petani') {
            $details = DetailPembelian::with(['pembelian', 'barang'])
                ->whereHas('barang', function ($query) use ($user) {
                    $query->where('user_id', $user->id);
                })
                ->orderByDesc('created_at')
                ->get();
        } else {
            // Admin lihat semua
            $details = DetailPembelian::with(['pembelian', 'barang'])
                ->orderByDesc('created_at')
                ->get();
        }

        return view('laporan.index', compact('details'));
    }

    
public function riwayat()
{
    $userId = Auth::id();

    $pembelian = \App\Models\Pembelian::with('detailPembelians.barang')
        ->where('user_id', $userId)
        ->latest()
        ->get();

    return view('riwayat.index', compact('pembelian'));
}

}
