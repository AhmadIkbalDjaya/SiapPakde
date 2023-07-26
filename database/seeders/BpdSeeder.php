<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('bpds')->insert([
                'desa_id' => $i, // Ganti ini dengan id desa yang sesuai, atau sesuaikan dengan relasi yang ada di database Anda.
                'sk_periode' => "SK Periode $i", // Sebaiknya mengisi nilai untuk 'sk_periode' agar tidak NULL
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
