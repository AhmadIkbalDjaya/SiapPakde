<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KarangTarunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();

        foreach ($desas as $index => $desa) {
            DB::table('karang_tarunas')->insert([
                'desa_id' => $desa->id,
                'nama' => "Karang Taruna $index",
                'jabatan' => "Jabatan 1",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
