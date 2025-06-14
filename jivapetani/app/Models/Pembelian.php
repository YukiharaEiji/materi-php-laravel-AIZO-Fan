<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
      protected $table = 'pembelian';

      protected $fillable = [
        'user_id',
        'tanggal',
    ];
// Pembelian.php
public function detailPembelians()
{
    return $this->hasMany(DetailPembelian::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
