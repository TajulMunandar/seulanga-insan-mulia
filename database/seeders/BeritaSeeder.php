<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Berita::create([
            'judul' => 'Peluncuran Program Baru Perusahaan',
            'slug' => 'peluncuran-program-baru-perusahaan',
            'konten' => 'Kami dengan bangga mengumumkan peluncuran program baru yang akan memberikan manfaat besar bagi masyarakat...',
            'excerpt' => 'Peluncuran program inovatif untuk kemajuan bersama.',
            'gambar' => 'news-1.jpg',
            'published_at' => now(),
            'status' => 'published',
        ]);

        \App\Models\Berita::create([
            'judul' => 'Kerjasama dengan Mitra Strategis',
            'slug' => 'kerjasama-dengan-mitra-strategis',
            'konten' => 'Perusahaan kami telah menjalin kerjasama strategis dengan beberapa mitra terkemuka...',
            'excerpt' => 'Kolaborasi untuk mencapai tujuan bersama.',
            'gambar' => 'news-2.jpg',
            'published_at' => now()->subDays(7),
            'status' => 'published',
        ]);

        \App\Models\Berita::create([
            'judul' => 'Pencapaian Milestone Penting',
            'slug' => 'pencapaian-milestone-penting',
            'konten' => 'Dalam perjalanan panjang kami, kami telah mencapai milestone penting yang patut dibanggakan...',
            'excerpt' => 'Momen bersejarah dalam perjalanan perusahaan.',
            'gambar' => 'news-3.jpg',
            'published_at' => now()->subDays(14),
            'status' => 'published',
        ]);
    }
}
