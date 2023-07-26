<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaderPkkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();

        foreach ($desas as $desa) {
            $memberNumber = rand(1, 5);
            for ($i=1; $i < $memberNumber; $i++) { 
                DB::table('kader_pkks')->insert([
                    'desa_id' => $desa->id,
                    'nama' => "Kader PPKK $i",
                    'jabatan' => "Jabatan $i",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
