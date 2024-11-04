<?php

// database/seeders/NewsSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        \App\Models\News::create([
            'title' => 'Pasar Kolpajung Resmi Dibuka',
            'content' => 'Pada tanggal 29 Mei 2024, Pasar Kolpajung resmi dibuka kembali...',
            'image' => 'path/to/image1.jpg'
        ]);
    
        \App\Models\News::create([
            'title' => 'Program Baru di Pasar Pamekasan',
            'content' => 'Pasar Pamekasan meluncurkan program baru untuk UMKM...',
            'image' => 'path/to/image2.jpg'
        ]);
    }
    
}
