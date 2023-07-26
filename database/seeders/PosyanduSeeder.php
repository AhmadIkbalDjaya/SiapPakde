<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();

        foreach ($desas as $i => $desa) {
            DB::table('posyandus')->insert([
                'desa_id' => $desa->id,
                'nama' => "Posyandu $i",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
