<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaderPosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();

        foreach ($desas as $desa) {
            $randomNumber = rand(1, 5); // Random angka antara 1-5
            for ($i = 1; $i <= $randomNumber; $i++) {
                foreach($desa->posyandu as $posyandu){
                    DB::table('kader_posyandus')->insert([
                        'posyandu_id' => $posyandu->id,
                        'nama' => "Kader Posyandu $i",
                        'jabatan' => "Jabatan $i",
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                }
            }
        }
    }
}
