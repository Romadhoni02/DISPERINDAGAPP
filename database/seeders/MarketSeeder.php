<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Market;

class MarketSeeder extends Seeder
{
    public function run()
    {
        Market::create([
            'name' => 'Pasar Kolpajung',
            'description' => 'Pasar Kolpajung adalah pasar tradisional di Pamekasan...',
            'location' => 'Jl. Kolpajung No.10, Pamekasan',
        ]);

        Market::create([
            'name' => 'Pasar Pamekasan',
            'description' => 'Pasar utama di pusat kota Pamekasan...',
            'location' => 'Jl. Raya Pamekasan, Pamekasan',
        ]);
    }
}
