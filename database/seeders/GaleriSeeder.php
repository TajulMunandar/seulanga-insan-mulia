<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Galeri::create([
            'gambar' => 'gallery-1.jpg',
            'deskripsi' => 'Kegiatan sosial perusahaan membantu masyarakat',
            'alt_text' => 'Kegiatan sosial perusahaan',
        ]);

        \App\Models\Galeri::create([
            'gambar' => 'gallery-2.jpg',
            'deskripsi' => 'Tim kerja dalam rapat strategis',
            'alt_text' => 'Rapat strategis tim',
        ]);

        \App\Models\Galeri::create([
            'gambar' => 'gallery-3.jpg',
            'deskripsi' => 'Peluncuran produk baru',
            'alt_text' => 'Peluncuran produk',
        ]);

        \App\Models\Galeri::create([
            'gambar' => 'gallery-4.jpg',
            'deskripsi' => 'Kunjungan ke mitra bisnis',
            'alt_text' => 'Kunjungan mitra',
        ]);
    }
}
