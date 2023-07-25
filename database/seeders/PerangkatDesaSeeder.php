<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfDummyData = 10;

        for ($i = 1; $i <= $numberOfDummyData; $i++) {
            DB::table('perangkat_desas')->insert([
                'desa_id' => rand(1, 10), // Ganti ini dengan id desa yang sesuai, atau sesuaikan dengan relasi yang ada di database Anda.
                'nama' => "Nama PD $i",
                'jabatan' => "Jabatan $i",
                'usia' => rand(25, 60),
                'pendidikan' => "Pendidikan PD $i",
                'agama' => "Agama PD $i",
                'foto' => 'prangkatDesa/default.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
