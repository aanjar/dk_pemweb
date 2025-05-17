<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class PageController extends Controller
{
    public function index(){
        $latestProducts = Produk::with('gambarUtama')
            ->latest()
            ->take(6)
            ->get();

        $produkUnggulan = Produk::with('gambarUtama')
            ->where('grade', 'Unggulan')
            ->take(6)
            ->get();

        return view('mainPage', compact('latestProducts', 'produkUnggulan'));

    }

    public function about(){
        return view("AboutStore");
    }

    public function contact(){
        return view("contact");
    }

    public function katalog(){
        return view("product");
    }

    public function admin(){
        return view("admin.index");
    }

    public function edit(){
        return view("admin.edit");
    }
}

