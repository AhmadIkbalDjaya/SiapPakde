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
                'desa_id' => $i,
                // 'sk_periode' => "SK Periode $i", 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
