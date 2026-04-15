<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StaffCategory;
use App\Models\HomeSlider;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Ma\'muriyat' => [
                [
                    'name' => 'Yoqubov Shehroz',
                    'subject' => 'Direktor',
                    'bio' => 'Muassasaga umumiy rahbarlik qiladi va ta\'lim-tarbiya jarayonini nazorat qiladi. Jamoani shakllantirish va malaka oshirish masalalari bo\'yicha mas\'ul.',
                ],
                [
                    'name' => 'Nigora Karimova',
                    'subject' => 'Mudira',
                    'bio' => 'Kundalik tashkiliy ishlar va tarbiyachilar faoliyatini muvofiqlashtiradi. Ota-onalar bilan aloqalarni mustahkamlash bo\'yicha ishlar olib boradi.',
                ],
            ],
            'Bog\'cha tarbiyachilari' => [
                [
                    'name' => 'Dilnoza Raufova',
                    'subject' => 'Katta guruh tarbiyachisi',
                    'bio' => 'Bolalarni maktabga tayyorlash, ularning nutqi va fikrlash qobiliyatini rivojlantirish bilan shug\'ullanadi. Pedagogik faoliyatida interaktiv o\'yinlardan foydalanadi.',
                ],
                [
                    'name' => 'Shaxnoza Umarova',
                    'subject' => 'Kichik guruh tarbiyachisi',
                    'bio' => 'Kichik yoshdagi bolalar bilan ishlash bo\'yicha mutaxassis. Ularning motorikasi va ijtimoiy moslashuviga yordam beradi.',
                ],
                [
                    'name' => 'Go\'zal Alimova',
                    'subject' => 'Musiqa rahbari',
                    'bio' => 'Bolalarda musiqa va san\'atga bo\'lgan qiziqishni uyg\'otadi. Bog\'cha bayramlari uchun musiqiy namoyishlarni tayyorlaydi.',
                ],
            ],
            'Oshpazlar' => [
                [
                    'name' => 'Olimjon Tursunov',
                    'subject' => 'Bosh oshpaz',
                    'bio' => 'Bolalar salomatligi uchun foydali, mazali va to\'yimli taomlar tayyorlashga ixtisoslashgan.',
                ],
                [
                    'name' => 'Malika Yusupova',
                    'subject' => 'Oshpaz yordamchisi',
                    'bio' => 'Taomlarni standartlarga muvofiq va o\'z vaqtida tayyorlanishida bosh oshpazga yordam beradi.',
                ],
            ],
            'Texnik xodimlar' => [
                [
                    'name' => 'Baxtiyor Soliyev',
                    'subject' => 'Qorovul',
                    'bio' => 'Bog\'cha hududida doimiy tinchlik va xavfsizlikni ta\'minlaydi. Turli xavflarni oldini olishga mas\'ul.',
                ],
                [
                    'name' => 'Zuhra Vahobova',
                    'subject' => 'Xo\'jalik bekasi',
                    'bio' => 'Muassasa binosi va hududini toza va ozoda saqlanishiga javobgar.',
                ]
            ]
        ];

        foreach ($categories as $catName => $staffs) {
            $category = StaffCategory::firstOrCreate(['name' => $catName]);

            foreach ($staffs as $staff) {
                // Check if already exists so we don't duplicate on multiple runs
                if (!HomeSlider::where('name', $staff['name'])->exists()) {
                    HomeSlider::create([
                        'staff_category_id' => $category->id,
                        'name' => $staff['name'],
                        'subject' => $staff['subject'],
                        'bio' => $staff['bio'],
                    ]);
                }
            }
        }
    }
}
