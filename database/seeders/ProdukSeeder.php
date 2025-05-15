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
            'kode_sku' => '1274OBOOPL',
            'id_kategori' => 4,
            'nama_produk' => 'Handycam Panasonic SDR S26 Second Kondisi Baik',
            'harga_jual' => 900000,
            'stok_produk' => 1,
            'status' => 'Second',
            'deskripsi_produk' => 'KONDISI :
- Layar Flip 180°
- Flash Baik
- Tutup USB Baik
- Tombol Baik
- Body Paintlos
- Jamur Tipis / Debu Micro
(Tidak Berpengaruh pada Fungsi dan Hasil)
- AF/MF Baik
- LCD Baik dan Bersih
- Fungsional Normal

KELENGKAPAN:
- Kamera
- Lensa
- Baterai
- Charger
- Nota Pembelian Dinoyo Kamera'
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
            'kode_sku' => '1267OHOOVT',
            'id_kategori' => 1,
            'nama_produk' => 'Nikon D5200 + kit 18 55mm Kondisi Baik',
            'harga_jual' => 2450000,
            'stok_produk' => 1,
            'status' => 'Second',
            'deskripsi_produk' => 'TYPE  : Nikon D5200 + kit 18 55mm

HARGA : 2.450.000

KONDISI :
● Layar Flip
● Flash Baik
● Tutup USB Baik
● Tombol Baik
● Body Paintlos
● Jamur Tipis / Debu Micro
(Tidak Berpengaruh pada Fungsi dan Hasil)
● AF/MF Baik
● LCD Vignet
● Fungsional Normal

KELENGKAPAN:
● Kamera
● Lensa
● Baterai
● Charger
● Nota Pembelian Dinoyo Kamera

Kode Barang : #1267_DK

Jual beli kamera malang raya
Kalian juga bisa jual kamera anda di toko kami, langsung aja ke Dinoyo Kamera

Barang siap pakai, silahkan di order

Untuk memaksimalkan pengiriman :
● Luar pulau jawa Wajib pakai JNE
● Dalam pulau Jawa wajib pakai JNT'

        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/2/1.png', 'is_main' => true],
            ['path_gambar' => 'productIMG/2/2.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/2/3.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/2/4.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/2/5.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/2/6.jpg', 'is_main' => false],
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
            'kode_sku' => '1271AEOOWS',
            'id_kategori' => 2,
            'nama_produk' => 'Fujifilm X a10 + kit 16 50mm (Pink) Kondisi Baik',
            'harga_jual' => 3300000,
            'stok_produk' => 1,
            'status' => 'Second',
            'deskripsi_produk' => 'TYPE  : Fujifilm X a10 + kit 16 50mm (Pink)

HARGA : 3.300.000

KONDISI :
● Wifi Berfungsi
● Layar Flip 180°
● Flash Baik
● Tutup USB Baik
● Tombol Baik
● Body Paintlos
● Jamur Tipis / Debu Micro
(Tidak Berpengaruh pada Fungsi dan Hasil)
● AF/MF Baik
● LCD ada whitespot tipis
● Fungsional Normal

KELENGKAPAN:
● Kamera
● Lensa
● Baterai
● Charger
● Nota Pembelian Dinoyo Kamera

Kode Barang : #1271_DK

Jual beli kamera malang raya
Kalian juga bisa jual kamera anda di toko kami, langsung aja ke Dinoyo Kamera

Barang siap pakai, silahkan di order

Untuk memaksimalkan pengiriman :
● Luar pulau jawa Wajib pakai JNE
● Dalam pulau Jawa wajib pakai JNT'

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


        // produk 4
            $produk = Produk::create([
                'kode_sku' => '1258OOOOJT',
                'id_kategori' => 7,
                'nama_produk' => 'Lensa Nikon 28 300mm VR Kondisi Baik',
                'harga_jual' => 5200000,
                'stok_produk' => 1,
                'status' => 'Second',
                'deskripsi_produk' => 'TYPE : Lensa Nikon 28 300mm VR

HARGA : 5.200.000



KONDISI :
● Second Baik
● Tombol Baik
● Body Fisik Paint Lost
● AF/MF baik
● Akurasi Baik
● Fungsional Normal Baik
● Jamur Tipis / Debu Micro (Tidak Berpengaruh Pada Hasil)



KELENGKAPAN :
● Lensa
● Tutup Depan
● Tutup Belakang
● Nota Pembelian Dinoyo Kamera

Kode Barang : #1258_DK

Jual beli kamera malang raya
Kalian juga bisa jual kamera anda di toko kami, langsung aja ke Dinoyo Kamera

Barang siap pakai, silahkan di order

Untuk memaksimalkan pengiriman :
● Luar pulau jawa Wajib pakai JNE
● Dalam pulau Jawa wajib pakai JNT'

            ]);

            $gambarList = [
                ['path_gambar' => 'productIMG/4/1.png', 'is_main' => true],
                ['path_gambar' => 'productIMG/4/2.jpg', 'is_main' => false],
                ['path_gambar' => 'productIMG/4/3.jpg', 'is_main' => false],
                ['path_gambar' => 'productIMG/4/4.jpg', 'is_main' => false],
            ];

            foreach ($gambarList as $gambar) {
                GambarProduk::create([
                    'id_produk' => $produk->id,
                    'path_gambar' => $gambar['path_gambar'],
                    'is_main' => $gambar['is_main'],
                ]);
            }


            // produk 5
        $produk = Produk::create([
            'kode_sku' => '1065',
            'id_kategori' => 5,
            'nama_produk' => 'Instax mini Li Play Brown Second Kondisi Baik',
            'harga_jual' => 1900000,
            'stok_produk' => 1,
            'status' => 'Second',
            'deskripsi_produk' => 'TYPE  : Instax mini Li Play Brown Second

HARGA : 1.900.000

KONDISI :
● Tutup USB Baik
● Tombol Baik
● Body Paintlos
● Jamur Tipis / Debu Micro
(Tidak Berpengaruh pada Fungsi dan Hasil)
● AF/MF Baik
● LCD Baik dan Bersih
● Fungsional Normal

KELENGKAPAN:
● Kamera
● Baterai
● Nota Pembelian Dinoyo Kamera

Kode Barang : #1065_DK

Jual beli kamera malang raya
Kalian juga bisa jual kamera anda di toko kami, langsung aja ke Dinoyo Kamera

Barang siap pakai, silahkan di order

Untuk memaksimalkan pengiriman :
● Luar pulau jawa Wajib pakai JNE
● Dalam pulau Jawa wajib pakai JNT'

        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/5/1.png', 'is_main' => true],
            ['path_gambar' => 'productIMG/5/2.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/5/3.jpg', 'is_main' => false],
        ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }

        // produk 6
        $produk = Produk::create([
            'kode_sku' => '1225OEOOPL',
            'id_kategori' => 3,
            'nama_produk' => 'Canon Ixus 185 Kondisi Baik',
            'harga_jual' => 2350000,
            'stok_produk' => 1,
            'status' => 'Second',
            'deskripsi_produk' => 'TYPE : Canon Ixus 185

HARGA : 2.350.000

KONDISI :
● Flash Baik
● Tutup USB Baik
● Tombol Baik
● Body Paintlos
● Jamur Tipis / Debu Micro
(Tidak Berpengaruh pada Fungsi dan Hasil)
● AF Baik
● LCD Baik dan Bersih
● Fungsional Normal

KELENGKAPAN:
● Kamera
● Baterai
● Charger
● Nota Pembelian Dinoyo Kamera

Kode Barang : #1225_DK

Jual beli kamera malang raya
Kalian juga bisa jual kamera anda di toko kami, langsung aja ke Dinoyo Kamera

Barang siap pakai, silahkan di order

Untuk memaksimalkan pengiriman :
● Luar pulau jawa Wajib pakai JNE
● Dalam pulau Jawa wajib pakai JNT'

        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/6/1.png', 'is_main' => true],
            ['path_gambar' => 'productIMG/6/1.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/6/3.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/6/4.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/6/5.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/6/6.jpg', 'is_main' => false],
        ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }

        // produk 7
        $produk = Produk::create([
            'kode_sku' => '1052COOOPL',
            'id_kategori' => 6,
            'nama_produk' => 'Insta 360 One RS Twin (4k + 360) Kondisi Baik',
            'harga_jual' => 5250000,
            'stok_produk' => 1,
            'status' => 'Second',
            'deskripsi_produk' => 'TYPE : Insta 360 One RS Twin double lensa (4k dan  360)
HARGA: 5.250.000


Fitur Utama :
Kamera Aksi Modular & Sistem Kamera 360
Video 5.7K30, Foto 18MP dengan Lensa 360
Lensa 4K: Video 4K60, Foto 48MP
Kapasitas Baterai 21% Lebih Banyak dari SATU R
3 Mikrofon untuk Audio Lebih Baik, Zoom Instan
HDR Aktif, Stabilisasi FlowState

Kondisi Second Baik

Body Fisik Baik

Tombol Baik

Touch Screen Baik

LCD Baik

WiFi Baik

Audio Baik

Fungsional Normal Baik

Jamur Tipis atau Debu Micro (Tidak Berpengaruh Pada Hasil)

KELENGKAPAN:

● Box
● Kamera 4k dan 360
● Baterai
● Nota Pembelian Dinoyo Kamera

Kode Barang : #1052_DK

Jual beli kamera malang raya
Kalian juga bisa jual kamera anda di toko kami, langsung aja ke Dinoyo Kamera

Barang siap pakai, silahkan di order

Untuk memaksimalkan pengiriman :
● Luar pulau jawa Wajib pakai JNE
● Dalam pulau Jawa wajib pakai JNT'

        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/7/1.png', 'is_main' => true],
            ['path_gambar' => 'productIMG/7/2.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/7/3.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/7/4.jpg', 'is_main' => false],
            ['path_gambar' => 'productIMG/7/5.jpg', 'is_main' => false],
        ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }

        // produk 8
        $produk = Produk::create([
            'kode_sku' => '-',
            'id_kategori' => 8,
            'nama_produk' => 'Baterai Kamera Canon LP-E6',
            'harga_jual' => 250000,
            'stok_produk' => 10,
            'status' => 'Baru',
            'deskripsi_produk' => 'Baterai Kamera Canon LP-E6

Kompatibel dengan Kamera Canon R / 6D / 6DII / 7D II / 7D / 70D / 80D'
        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/8/1.png', 'is_main' => true],
                    ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }

        // produk 9
        $produk = Produk::create([
            'kode_sku' => '-',
            'id_kategori' => 9,
            'nama_produk' => 'Memory Card Sandisk 16GB Ultra SDHC',
            'harga_jual' => 150000,
            'stok_produk' => 10,
            'status' => 'Baru',
            'deskripsi_produk' => 'Memory Card Sandisk 16GB Ultra SDHC'
        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/9/1.png', 'is_main' => true],
                    ];

        foreach ($gambarList as $gambar) {
            GambarProduk::create([
                'id_produk' => $produk->id,
                'path_gambar' => $gambar['path_gambar'],
                'is_main' => $gambar['is_main'],
            ]);
        }

        // produk 10
        $produk = Produk::create([
            'kode_sku' => '-',
            'id_kategori' => 10,
            'nama_produk' => 'Tali Strap Leher Kamera Motif Batik',
            'harga_jual' => 120000,
            'stok_produk' => 10,
            'status' => 'Baru',
            'deskripsi_produk' => '-'
        ]);

        $gambarList = [
            ['path_gambar' => 'productIMG/10/1.png', 'is_main' => true],
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
