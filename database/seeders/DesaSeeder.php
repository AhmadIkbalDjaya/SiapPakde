<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfDummyData = 10;

        for ($i = 1; $i <= $numberOfDummyData; $i++) {
            DB::table('desas')->insert([
                'slug' => "desa-$i",
                'nama' => "Nama Desa $i",
                'alamat' => "Alamat Desa $i",
                'potensi' => "Potensi untuk Desa $i. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'contact' => "Nomor Kontak $i",
                'longitude' => mt_rand(-18000, 18000) / 100,
                'latitude' => mt_rand(-9000, 9000) / 100,
                'kecamatan_id' => $i,
                'jumlah_penduduk' => rand(1000, 50000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
