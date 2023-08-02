<?php

namespace Database\Seeders;

use App\Models\PerangkatDesa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = \App\Models\Desa::all();
        foreach ($desas as $desa) {
            PerangkatDesa::create([
                'desa_id' => $desa->id,
                'nama' => "Nama Perangkat Desa",
                'tempat_lahir' => "Tempat Lahir",
                'tanggal_lahir' => now()->subYears(rand(20, 40))->subMonths(rand(0, 12))->subDays(rand(0, 30)),
                'jenis_kelamin' => rand(0, 1) ? 'Laki-Laki' : 'Perempuan',
                'pendidikan' => "Pendidikan Perangkat Desa",
                'pekerjaan' => "Pekerjaan Perangkat Desa",
            ]);
        }
    }
}
