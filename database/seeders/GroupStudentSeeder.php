<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StaffCategory;
use App\Models\HomeSlider;
use App\Models\Group;
use App\Models\Student;

class GroupStudentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Kategoriyani olish yoki yaratish
        $category = StaffCategory::firstOrCreate(['name' => 'Tarbiyachilar']);

        // 2. Bir nechta tarbiyachilar va yordamchilarni yaratish
        $staffCount = 15;
        $teachers = [];
        $assistants = [];

        for ($i = 1; $i <= $staffCount; $i++) {
            $teachers[] = HomeSlider::firstOrCreate(
                ['name' => "Tarbiyachi $i"],
                [
                    'subject' => $i % 2 == 0 ? 'Bosh tarbiyachi' : 'Tarbiyachi',
                    'bio' => "$i yillik tajribaga ega malakali mutaxassis.",
                    'staff_category_id' => $category->id,
                    'image' => "homeslider/teacher$i.jpg"
                ]
            );

            $assistants[] = HomeSlider::firstOrCreate(
                ['name' => "Yordamchi $i"],
                [
                    'subject' => 'Yordamchi tarbiyachi',
                    'bio' => "Bolalar bilan ishlashda katta mahoratga ega.",
                    'staff_category_id' => $category->id,
                    'image' => "homeslider/assistant$i.jpg"
                ]
            );
        }

        // 3. 10 ta guruh yaratish
        $groupNames = [
            'Quyoshcha', 'Yulduzcha', 'Kamalak', 'Lola', 'Binafsha', 
            'Chaman', 'Parvoz', 'Bilimdon', 'Zukko', 'Iqtidor'
        ];

        $directions = ['Katta guruh', 'O\'rta guruh', 'Kichik guruh', 'Tayyorlov guruhi'];

        foreach ($groupNames as $index => $name) {
            $group = Group::firstOrCreate(
                ['name' => $name],
                [
                    'direction' => $directions[array_rand($directions)],
                    'result_percentage' => rand(85, 99),
                    'teacher_id' => $teachers[array_rand($teachers)]->id,
                    'assistant_id' => $assistants[array_rand($assistants)]->id,
                    'image' => "groups/group" . ($index + 1) . ".jpg"
                ]
            );

            // 4. Har bir guruhga 6-8 tadan o'quvchi qo'shish
            $studentCount = rand(6, 8);
            for ($j = 1; $j <= $studentCount; $j++) {
                Student::firstOrCreate(
                    ['name' => "O'quvchi " . ($index * 10 + $j), 'group_id' => $group->id],
                    [
                        'image' => "students/s" . rand(1, 8) . ".jpg",
                        'bio' => "$name guruhi tarbiyalanuvchisi. Iqtidorli va odobli bola."
                    ]
                );
            }
        }
    }
}
