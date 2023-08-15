<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kecamatans = [
            'Bajeng', 'Bajeng Barat', 'Barombong', 'Biringbulu', 'Bontolempangan',
            'Bontomarannu', 'Bontonompo', 'Bontonompo Selatan', 'Bungaya',
            'Manuju', 'Pallangga', 'Parangloe', 'Parigi', 'Pattallassang',
            'Somba Opu', 'Tinggimoncong', 'Tompobulu', 'Tombolo Pao',
        ];

        foreach ($kecamatans as $kecamatan) {
            DB::table('kecamatans')->insert([
                'nama' => $kecamatan,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
