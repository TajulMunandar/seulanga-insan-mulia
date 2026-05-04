<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\StrukturOrganisasi::create([
            'nama' => 'Dr. Ahmad Santoso',
            'jabatan' => 'Direktur Utama',
            'foto' => 'director.jpg',
            'deskripsi' => 'Bertanggung jawab atas pengembangan strategis perusahaan dan kepemimpinan eksekutif.',
            'urutan' => 1,
        ]);

        \App\Models\StrukturOrganisasi::create([
            'nama' => 'Siti Nurhaliza, M.M.',
            'jabatan' => 'Direktur Operasional',
            'foto' => 'operations-director.jpg',
            'deskripsi' => 'Mengawasi operasi harian dan memastikan efisiensi proses bisnis.',
            'urutan' => 2,
        ]);

        \App\Models\StrukturOrganisasi::create([
            'nama' => 'Budi Setiawan, S.Kom.',
            'jabatan' => 'Manajer IT',
            'foto' => 'it-manager.jpg',
            'deskripsi' => 'Bertanggung jawab atas infrastruktur teknologi dan pengembangan sistem.',
            'urutan' => 3,
        ]);

        \App\Models\StrukturOrganisasi::create([
            'nama' => 'Maya Sari, S.E.',
            'jabatan' => 'Manajer Keuangan',
            'foto' => 'finance-manager.jpg',
            'deskripsi' => 'Mengatur keuangan perusahaan dan pelaporan keuangan.',
            'urutan' => 4,
        ]);
    }
}
