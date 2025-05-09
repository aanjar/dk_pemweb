<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use App\Models\GambarProduk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nonaktifkan foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate tabel yang berelasi (gambar dulu, baru produk)
        GambarProduk::truncate();
        Produk::truncate();

        // Aktifkan kembali foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // produk 1
        $produk = Produk::create([
            'kode_sku' => 'PRD001',
            'id_kategori' => 1,
            'nama_produk' => 'Handycam Panasonic SDR S26 Second Kondisi Baik',
            'harga_jual' => 900000,
        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/1/1.png', 'is_main' => true],
            ['path_gambar' => 'productIMG/1/2.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/1/3.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/1/4.jpg', 'is_main' => false],
        ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }

        // produk 2
        $produk = Produk::create([
            'kode_sku' => 'PRD002',
            'id_kategori' => 1,
            'nama_produk' => 'Nikon D5200 + kit 18 55mm Kondisi Baik',
            'harga_jual' => 2450000,
        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/2/1.png', 'is_main' => true],
            ['path_gambar' => 'productIMG/2/2.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/2/3.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/2/4.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/2/5.jpg', 'is_main' => false],
        ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }


        // produk 3
        $produk = Produk::create([
            'kode_sku' => 'PRD003',
            'id_kategori' => 1,
            'nama_produk' => 'Fujifilm X a10 + kit 16 50mm (Pink) Kondisi Baik',
            'harga_jual' => 3300000,
        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/3/1.png', 'is_main' => true],
            ['path_gambar' => 'productIMG/3/2.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/3/3.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/3/4.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/3/5.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/3/6.jpg', 'is_main' => false],
        ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }


    }


}
