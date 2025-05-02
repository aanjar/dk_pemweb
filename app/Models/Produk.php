<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'kode_sku',
        'id_kategori',
        'nama_produk',
        'harga_jual',
    ];

    // Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    // Relasi ke detail produk
    public function detail()
    {
        return $this->hasOne(DetailProduk::class, 'id_produk', 'id');
    }

    // Relasi ke banyak gambar
    public function gambar()
    {
        return $this->hasMany(GambarProduk::class, 'id_produk', 'id');
    }
}
