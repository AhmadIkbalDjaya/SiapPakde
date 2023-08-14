<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BumdesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfDummyData = 10;

        for ($i = 1; $i <= $numberOfDummyData; $i++) {
            DB::table('bumdes')->insert([
                'desa_id' => rand(1, 10), // Ganti ini dengan id desa yang sesuai, atau sesuaikan dengan relasi yang ada di database Anda.
                'nama' => "Bumdes Nama $i",
                'direktur' => "Direktur Bumdes $i",
                'sertifikasi' => rand(0, 1), // Nilai boolean acak (0: false, 1: true)
                'jumlah_pegawai' => rand(5, 20),
                'unit_usaha' => "Unit Usaha Bumdes $i",
                'phone' => "082192084589",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
