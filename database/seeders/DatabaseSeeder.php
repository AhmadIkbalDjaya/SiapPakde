<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\StatusDesa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KecamatanSeeder::class);
        $this->call(StatusDesaSeeder::class);
        $this->call(DesaSeeder::class);
        $this->call(PerangkatDesaSeeder::class);
        $this->call(BumdesSeeder::class);
        $this->call(BpdSeeder::class);
        $this->call(BpdMemberSeeder::class);
        $this->call(KaderPkkSeeder::class);
        $this->call(PosyanduSeeder::class);
        $this->call(KaderPosyanduSeeder::class);
        $this->call(KpmSeeder::class);
        $this->call(KarangTarunaSeeder::class);
        $this->call(LpmSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(KategoriKawasanSeeder::class);
    }
}
