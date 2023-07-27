<?php

namespace Database\Seeders;

use App\Models\Desa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "username" => "rootAdmin",
            "password" => Hash::make("password"),
            'role' => 0,
        ]);
        $desas = Desa::all();

        foreach ($desas as $desa) {
            User::create([
                'username' => "user_desa_{$desa->id}",
                'password' => Hash::make('password'),
                'desa_id' => $desa->id,
            ]);
        }
    }
}
