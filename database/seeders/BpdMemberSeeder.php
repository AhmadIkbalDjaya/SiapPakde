<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BpdMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();

        foreach ($desas as $desa) {
            $memberNumber = rand(1, 5);
            for ($i = 1; $i <= $memberNumber; $i++) {
                DB::table('bpd_members')->insert([
                    'bpd_id' => $desa->bpd->id,
                    'nama' => "Anggota BPD $i",
                    'jabatan' => "Jabatan $i",
                    'keterwakilan_dusun' => "Dusun $i",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
