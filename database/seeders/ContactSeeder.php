<?php

// database/seeders/ContactSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '08123456789', // Tambahkan nilai untuk kolom phone
            'message' => 'Saya ingin tahu lebih banyak tentang pasar di Pamekasan.'
        ]);
    }
}
