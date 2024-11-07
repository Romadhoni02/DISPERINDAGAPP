<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Cek apakah user dengan username 'admin' sudah ada
        if (!User::where('username', 'admin')->exists()) {
            User::create([
                'username' => 'admin',
                'password' => Hash::make('password'), // Pastikan password dienkripsi
            ]);
        }
    }
}