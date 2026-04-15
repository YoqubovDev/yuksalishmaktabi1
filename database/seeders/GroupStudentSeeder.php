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
        // 1. Create or get Category
        $category = StaffCategory::firstOrCreate(['name' => 'Tarbiyachilar']);

        // 2. Create sample staff members
        $teacher1 = HomeSlider::firstOrCreate(
            ['name' => 'Dilnoza Axmedova'],
            [
                'subject' => 'Bosh tarbiyachi',
                'bio' => '15 yillik tajribaga ega tajribali pedagog.',
                'staff_category_id' => $category->id,
                'image' => 'homeslider/teacher1.jpg'
            ]
        );

        $assistant1 = HomeSlider::firstOrCreate(
            ['name' => 'Zuhra Karimova'],
            [
                'subject' => 'Yordamchi tarbiyachi',
                'bio' => 'Bolalarni sevuvchi va g\'amxo\'r tarbiyachi.',
                'staff_category_id' => $category->id,
                'image' => 'homeslider/assistant1.jpg'
            ]
        );

        // 3. Create Group
        $group1 = Group::firstOrCreate(
            ['name' => 'Quyoshcha'],
            [
                'direction' => 'Katta guruh',
                'schedule_image' => '25',
                'result_percentage' => 95,
                'teacher_id' => $teacher1->id,
                'assistant_id' => $assistant1->id,
                'image' => 'groups/sun.jpg'
            ]
        );

        // 4. Create Students
        $students = [
            ['name' => 'Alijon Valijonov', 'image' => 'students/s1.jpg', 'bio' => 'Rasm chizishga qiziqadi. Quyoshcha guruhi tarbiyalanuvchisi.'],
            ['name' => 'Oysha Komilova', 'image' => 'students/s2.jpg', 'bio' => 'She\'r aytishni yaxshi ko\'radi. Quyoshcha guruhi tarbiyalanuvchisi.'],
            ['name' => 'Abbos Rustamov', 'image' => 'students/s3.jpg', 'bio' => 'Shaxmat o\'ynashga qiziqadi. Quyoshcha guruhi tarbiyalanuvchisi.'],
            ['name' => 'Ziyoda Islomova', 'image' => 'students/s4.jpg', 'bio' => 'Raqsga tushishni yaxshi ko\'radi. Quyoshcha guruhi tarbiyalanuvchisi.'],
            ['name' => 'Umidbek Shokirov', 'image' => 'students/s5.jpg', 'bio' => 'Matematikaga qiziqishi baland. Quyoshcha guruhi tarbiyalanuvchisi.'],
            ['name' => 'Malika G\'ofurova', 'image' => 'students/s6.jpg', 'bio' => 'Kitob o\'qishni yaxshi ko\'radi. Quyoshcha guruhi tarbiyalanuvchisi.'],
            ['name' => 'Sardorbek Akramov', 'image' => 'students/s7.jpg', 'bio' => 'Sportga qiziqadi. Quyoshcha guruhi tarbiyalanuvchisi.'],
            ['name' => 'Gulyora Orifova', 'image' => 'students/s8.jpg', 'bio' => 'Qo\'shiq kuylashga qobiliyati bor. Quyoshcha guruhi tarbiyalanuvchisi.'],
        ];

        foreach ($students as $studentData) {
            Student::firstOrCreate(
                ['name' => $studentData['name'], 'group_id' => $group1->id],
                [
                    'image' => $studentData['image'],
                    'bio' => $studentData['bio']
                ]
            );
        }
    }
}
