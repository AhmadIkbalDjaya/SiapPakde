<?php

namespace Database\Seeders;

use App\Models\StatusDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ["Desa Mandiri", "Desa Maju", "Desa Berkembang", "Desa Tertinggal", "Desa Sangat Tertinggal"];

        foreach ($statuses as $status) {
            StatusDesa::create([
                "nama" => $status,
            ]);
        }
    }
}
