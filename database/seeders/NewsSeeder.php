<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'title' => 'Pasar Pamekasan Terbaru',
            'content' => 'Info terbaru mengenai pasar di Pamekasan...',
            'image' => 'path/to/image1.jpg',
        ]);

        News::create([
            'title' => 'Pembukaan Pasar Kolpajung',
            'content' => 'Peresmian pasar utama di kota Pamekasan...',
            'image' => 'path/to/image2.jpg',
        ]);
    }
}
