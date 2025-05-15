<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua kategori untuk dropdown
        $kategoris = Kategori::all();

        // Ambil parameter dari form
        $search = $request->query('search');
        $kategoriFilter = $request->query('kategori');
        $urutkan = $request->query('urutkan');
        $priceRange = $request->query('price_range');

        // Inisialisasi query produk
        $query = Produk::with('gambarUtama');

        // Filter pencarian
        if ($search) {
            $query->where('nama_produk', 'LIKE', '%' . $search . '%');
        }

        // Filter kategori
        if ($kategoriFilter && $kategoriFilter !== '') {
            $query->where('id_kategori', $kategoriFilter);
        }

        // Filter rentang harga
        if ($priceRange) {
            [$minPrice, $maxPrice] = explode('-', $priceRange);
            if ($maxPrice === 'up') {
                $query->where('harga_jual', '>=', $minPrice);
            } else {
                $query->whereBetween('harga_jual', [$minPrice, $maxPrice]);
            }
        }

        // Pengurutan
        switch ($urutkan) {
            case 'terbaru':
                $query->orderBy('created_at', 'desc');
                break;
            case 'termurah':
                $query->orderBy('harga_jual', 'asc');
                break;
            case 'termahal':
                $query->orderBy('harga_jual', 'desc');
                break;
            case 'populer':
                // Asumsi: populer berdasarkan stok rendah (atau tambah kolom view_count di masa depan)
                $query->orderBy('stok_produk', 'asc');
                break;
            case 'a-z':
                $query->orderBy('nama_produk', 'asc');
                break;
            case 'z-a':
                $query->orderBy('nama_produk', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc'); // Default
        }

        // Ambil produk
        $produk_list = $query->get();

        // Kelompokkan produk berdasarkan kategori
        $productsByCategory = [];
        foreach ($kategoris as $kategori) {
            $productsByCategory[$kategori->nama_kategori] = $produk_list->where('id_kategori', $kategori->id);
        }

        return view('product', compact('kategoris', 'productsByCategory', 'search', 'kategoriFilter', 'urutkan', 'priceRange'));
    }
}
