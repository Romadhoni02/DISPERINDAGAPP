<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'message' => 'Saya ingin tahu lebih banyak tentang pasar di Pamekasan.'
        ]);
    }
}
