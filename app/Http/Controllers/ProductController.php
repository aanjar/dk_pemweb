<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){

        $kategoris = Kategori::all();
        // dd($kategoris);
        // $products = Produk::with('gambarUtama')->get();
        if ($kategoris->isEmpty()) {
            $productsByCategory = [];
        } else {
            // Mengambil produk dan mengelompokkannya berdasarkan kategori
            $productsByCategory = [];
            foreach ($kategoris as $kategori) {
                $productsByCategory[$kategori->nama_kategori] = Produk::with('gambarUtama')
                    ->where('id_kategori', $kategori->id)
                    ->get();
            }
        }

        return view('product', compact('kategoris', 'productsByCategory'));
    }
}
