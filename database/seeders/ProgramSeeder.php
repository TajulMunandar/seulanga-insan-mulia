<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Program::create([
            'nama' => 'Program Pendidikan',
            'deskripsi' => 'Program untuk meningkatkan akses pendidikan bagi anak-anak kurang mampu melalui beasiswa dan fasilitas belajar.',
            'gambar' => 'program-education.jpg',
            'urutan' => 1,
        ]);

        \App\Models\Program::create([
            'nama' => 'Program Kesehatan',
            'deskripsi' => 'Inisiatif kesehatan masyarakat dengan penyediaan layanan medis gratis dan kampanye kesadaran kesehatan.',
            'gambar' => 'program-health.jpg',
            'urutan' => 2,
        ]);

        \App\Models\Program::create([
            'nama' => 'Program Lingkungan',
            'deskripsi' => 'Upaya pelestarian lingkungan melalui penghijauan, pengelolaan sampah, dan edukasi lingkungan.',
            'gambar' => 'program-environment.jpg',
            'urutan' => 3,
        ]);
    }
}
