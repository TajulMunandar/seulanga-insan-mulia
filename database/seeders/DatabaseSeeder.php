<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@company.com',
            'password' => bcrypt('password'),
            'role' => 'super_admin',
        ]);

        $this->call([
            TentangKamiSeeder::class,
            ProgramSeeder::class,
            StrukturOrganisasiSeeder::class,
            GaleriSeeder::class,
            BeritaSeeder::class,
        ]);
    }
}
