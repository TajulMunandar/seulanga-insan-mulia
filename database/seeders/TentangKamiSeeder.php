<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TentangKami::create([
            'deskripsi' => 'Perusahaan kami adalah organisasi yang berkomitmen untuk memberikan solusi inovatif dan berkelanjutan dalam bidang teknologi dan pengembangan masyarakat. Dengan pengalaman lebih dari 10 tahun, kami telah membantu ribuan klien mencapai tujuan mereka melalui layanan berkualitas tinggi dan pendekatan yang berorientasi pada hasil.',
            'visi' => 'Menjadi perusahaan terdepan dalam inovasi teknologi dan pengembangan masyarakat yang berkelanjutan, memberikan dampak positif bagi masyarakat global.',
            'misi' => 'Menyediakan solusi teknologi terdepan, membangun kemitraan strategis, dan berkontribusi aktif dalam pengembangan masyarakat melalui program-program sosial yang bermanfaat.',
            'sejarah' => 'Didirikan pada tahun 2013, perusahaan kami dimulai sebagai startup kecil dengan visi besar untuk membuat perubahan positif. Melalui kerja keras dan dedikasi tim, kami telah berkembang menjadi perusahaan yang dipercaya oleh berbagai klien dari berbagai sektor industri.',
        ]);
    }
}
