<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['nama_kategori' => 'DSLR Camera'],
            ['nama_kategori' => 'Mirrorless Camera'],
            ['nama_kategori' => 'Digital/Pocket Camera'],
            ['nama_kategori' => 'Handycam'],
            ['nama_kategori' => 'Instant Camera'],
            ['nama_kategori' => 'Other Camera'],
            ['nama_kategori' => 'Lens'],
            ['nama_kategori' => 'Battery/Charger'],
            ['nama_kategori' => 'Memory Card'],
            ['nama_kategori' => 'Other Accesories'],
        ]);
    }
}
