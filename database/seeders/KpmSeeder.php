<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();

        foreach ($desas as $desa) {
            $randomNumber = rand(1, 5);
            for ($i = 1; $i <= $randomNumber; $i++) {
                DB::table('kpms')->insert([
                    'desa_id' => $desa->id,
                    'nama' => "KPM $i ",
                    'jabatan' => "Jabatan $i",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
