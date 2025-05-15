<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;

use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function show($id)
    {
        // Ambil produk dengan relasi gambar dan kategori
        $produk = Produk::with(['gambar', 'kategori'])->findOrFail($id);

        return view('product-detail', compact('produk'));
    }
    
    public function index(Request $request)
        {
            // Ambil semua kategori
            $kategoris = Kategori::all();

            // Ambil parameter dari form
            $search = $request->query('search');
            $kategoriFilter = $request->query('kategori');
            $sort = $request->query('sort', []);

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

            // Ambil produk
            $produk_list = $query->get();

            // Kelompokkan produk berdasarkan kategori
            $productsByCategory = [];
            foreach ($kategoris as $kategori) {
                $produk_kategori = $produk_list->where('id_kategori', $kategori->id);

                // Terapkan sorting per kategori
                $sortOption = $sort[$kategori->nama_kategori] ?? 'terbaru';
                switch ($sortOption) {
                    case 'terbaru':
                        $produk_kategori = $produk_kategori->sortByDesc('created_at');
                        break;
                    case 'termurah':
                        $produk_kategori = $produk_kategori->sortBy('harga_jual');
                        break;
                    case 'termahal':
                        $produk_kategori = $produk_kategori->sortByDesc('harga_jual');
                        break;
                    case 'a-z':
                        $produk_kategori = $produk_kategori->sortBy('nama_produk');
                        break;
                    default:
                        $produk_kategori = $produk_kategori->sortByDesc('created_at');
                }

                $productsByCategory[$kategori->nama_kategori] = $produk_kategori;
            }

            return view('product', compact('kategoris', 'productsByCategory', 'search', 'kategoriFilter', 'sort'));
        }
}
