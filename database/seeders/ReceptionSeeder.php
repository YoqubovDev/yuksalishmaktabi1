<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reception;
use Illuminate\Support\Facades\Storage;

class ReceptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reception::truncate();

        $receptions = [
            ['image' => 'qabul_rasmlari/photo_1_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_2_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_3_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_4_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_5_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_6_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_7_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_8_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_9_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_10_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_11_2025-03-24_00-16-14.jpg'],
            ['image' => 'qabul_rasmlari/photo_12_2025-03-24_00-16-14.jpg'],
        ];

        foreach ($receptions as $rec) {
            Reception::create($rec);
        }
    }
}
