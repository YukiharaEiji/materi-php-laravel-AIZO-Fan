<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\DetailPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::where('user_id', Auth::id())->latest()->get();
        return view('pembelian.index', compact('pembelian'));
    }

    public function create()
    {
        $barangs = Barang::where('stok', '>', 0)->get();
        return view('pembelian.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $barang = Barang::findOrFail($request->barang_id);

        if ($request->jumlah > $barang->stok) {
            return back()->with('error', 'Jumlah melebihi stok tersedia.');
        }

        DB::transaction(function () use ($request, $barang) {
            // Simpan ke tabel pembelian
            $pembelian = Pembelian::create([
                'user_id' => Auth::id(),
                'tanggal' => now()->toDateString(),
            ]);

            // Simpan ke detail_pembelian
            DetailPembelian::create([
                'pembelian_id' => $pembelian->id,
                'barang_id' => $barang->id,
                'jumlah' => $request->jumlah,
                'harga' => $barang->harga,
                'subtotal' => $barang->harga * $request->jumlah,
            ]);

            // Kurangi stok
            $barang->decrement('stok', $request->jumlah);
        });

        return redirect()->route('pembeli.riwayat.index')->with('success', 'Pembelian berhasil.');
    }

    public function beliBarang()
    {
        $barangs = Barang::where('stok', '>', value: 0)->latest()->get();
        return view('beli.index', compact('barangs'));
    }

    public function prosesBeli(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $barang = Barang::findOrFail($request->barang_id);

        if ($barang->stok < $request->jumlah) {
            return back()->with('error', 'Stok tidak mencukupi.');
        }

        DB::transaction(function () use ($request, $barang) {
            // Simpan ke tabel pembelian
            $pembelian = Pembelian::create([
                'user_id' => Auth::id(),
                'tanggal' => now()->toDateString(),
            ]);

            // Simpan ke detail pembelian
            DetailPembelian::create([
                'pembelian_id' => $pembelian->id,
                'barang_id' => $barang->id,
                'jumlah' => $request->jumlah,
                'harga' => $barang->harga,
                'subtotal' => $barang->harga * $request->jumlah,
            ]);

            // Update stok barang
            $barang->decrement('stok', $request->jumlah);
        });

        return redirect()->route('pembeli.riwayat.index')->with('success', 'Berhasil membeli barang.');
    }
}
