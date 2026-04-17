<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::truncate();

        Contact::create([
            'address' => 'Toshkent shahri, Chilonzor tumani',
            'phone' => '99 123 45 67',
            'email' => 'sevinch475@mail.uz',
            'work_time' => '08:00 - 18:00',
            'lunch_time' => '13:00 - 14:00',
            'bus' => '14, 25, 40',
            'marshrut' => '5, 8, 12',
            'stop' => 'Chilonzor bekati',
            'telegram' => 'https://t.me/sevinch475',
            'instagram' => 'https://instagram.com/sevinch475',
            'map_link' => 'https://maps.google.com/?q=41.2828,69.1917',
            'rating' => 5.0,
            'reviews_count' => 120,
        ]);
    }
}
