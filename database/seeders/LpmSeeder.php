<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();

        foreach ($desas as $desa) {
            DB::table('lpms')->insert([
                'desa_id' => $desa->id,
                'nama' => "LPM Desa " . $desa->nama,
                'jabatan' => "Jabatan 1",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
