<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    use HasFactory;

    protected $table = 'detail_produk';
    protected $primaryKey = 'id_produk';
    public $incrementing = false; // Karena foreign key, bukan auto increment

    protected $fillable = [
        'stok_produk',
        'deskripsi_produk',
        'status',
        'kelengkapan',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
}
