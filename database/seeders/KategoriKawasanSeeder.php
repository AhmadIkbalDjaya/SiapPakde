<?php

namespace Database\Seeders;

use App\Models\KategoriKawasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriKawasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriKawasan::create([
            "nama" => "Kelor",
        ]);
        KategoriKawasan::create([
            "nama" => "Wisata",
        ]);
    }
}
