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
                'nama' => "Desa Nama $i",
                'alamat' => "Alamat Desa $i",
                'penjelasan' => "Penjelasan untuk Desa $i. Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'longitude' => "Longitude Desa $i",
                'latitude' => "Latitude Desa $i",
                'foto' => 'desa/default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
