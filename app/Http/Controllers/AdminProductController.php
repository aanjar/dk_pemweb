<?php

namespace App\Http\Controllers;

use App\Models\GambarProduk;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Produk::with(['kategori', 'gambarUtama'])->get();
        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        return view('admin.index', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_sku' => 'string|max:100|unique:produk,kode_sku',
            'nama_produk' => 'required|string|max:225',
            'harga_jual' => 'required|numeric',
            'id_kategori' => 'required|exists:kategori,id',
            'stok_produk' => 'required|numeric',
            'deskripsi_produk' => 'required',
            'status' => 'required|in:Baru,Second',
            'grade'=> 'required|in:Unggulan,Standar,Minus',

            //validasi gambar
            'gambar_produk.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //simpan produk
        $produk = Produk::create([
            'kode_sku' => $request->kode_sku,
            'id_kategori' => $request->id_kategori,
            'nama_produk' => $request->nama_produk,
            'harga_jual' => $request->harga_jual,
            'stok_produk' => $request->stok_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'status' => $request->status,
            'grade' => $request->grade,
        ]);

        if ($request->hasFile('gambar_produk')) {
            foreach ($request->file('gambar_produk') as $index => $file) {
                $path = $file->store('gambar_produk', 'public');

                GambarProduk::create([
                    'id_produk' => $produk->id,
                    'path_gambar' => $path,
                    'is_main' =>$index == $request->main_image_index,
                ]);
            }
        }


        return redirect()->route('admin.index')->with('success', 'Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.edit', compact('product', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $produk = Produk::findOrFail($id);

        $request->validate([
            'kode_sku' => 'string|max:100|unique:produk,kode_sku,' . $produk->id,
            'nama_produk' => 'string|max:225',
            'harga_jual' => 'numeric',
            'id_kategori' => 'exists:kategori,id',
            'stok_produk' => 'numeric',
            'deskripsi_produk' => 'string',
            'status' => 'string|max:100',
        ]);

        $produk->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Produk Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Produk::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.index')->with('success', 'Produk Berhasil Dihapus');
    }
}
