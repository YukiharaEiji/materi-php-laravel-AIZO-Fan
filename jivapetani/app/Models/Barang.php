<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
    'nama', 
    'stok', 
    'harga', 
    'deskripsi', 
    'gambar'
    ];


    public function detailPembelian()
    {
    return $this->hasMany(DetailPembelian::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}


}
