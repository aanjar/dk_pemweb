<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        // $products = Produk::all();
        $products = Produk::with('gambarUtama')->get();

    return view('product', compact('products'));
    }
}
