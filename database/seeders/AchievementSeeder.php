<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;
use App\Models\AchievementStats;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Eskilarni tozalash
        Achievement::truncate();
        AchievementStats::truncate();

        // 2. 10 ta yutuq yaratish
        $achievements = [
            [
                'name' => 'Eng yaxshi tasviriy san\'at',
                'badge' => 'Oltin medal',
                'description' => 'Tuman miqyosida o\'tkazilgan "Mening orzuimdagi uy" rasmlar tanlovida 1-o\'rin.',
                'category' => 'Respublika',
                'image' => 'achievements/a1.webp'
            ],
            [
                'name' => 'Musiqa va raqs malikasi',
                'badge' => 'Faxriy yorliq',
                'description' => '"Navro\'z nafasi" festivalida eng chiroyli raqs ijrosi uchun mahorat diplomi.',
                'category' => 'Viloyat',
                'image' => 'achievements/a2.webp'
            ],
            [
                'name' => 'Kichik shaxmatchilar',
                'badge' => 'Kumush medal',
                'description' => 'Viloyat shaxmat musobaqasida guruhimiz tarbiyalanuvchisi 2-o\'rinni egalladi.',
                'category' => 'Viloyat',
                'image' => 'achievements/a3.webp'
            ],
            [
                'name' => 'Zakovat bolajoni',
                'badge' => 'Kubok sohibi',
                'description' => 'Intellektual o\'yinlar g\'olibi va mantiqiy fikrlash bo\'yicha eng yuqori natija.',
                'category' => 'Tuman',
                'image' => 'achievements/a4.webp'
            ],
            [
                'name' => 'Sog\'lom hayot elchisi',
                'badge' => 'Oltin medal',
                'description' => '"Quvnoq startlar" sport musobaqasida guruhimiz mutloq g\'oliblikni qo\'lga kiritdi.',
                'category' => 'Tuman',
                'image' => 'achievements/a5.webp'
            ],
            [
                'name' => 'She\'rxonlik kechasi',
                'badge' => 'Faxriy yorliq',
                'description' => '"Ona tilim - jonu dilim" ko\'rik tanlovidagi ifodali o\'qish uchun mahorat belgisi.',
                'category' => 'Maktabgacha ta\'lim',
                'image' => 'achievements/a6.webp'
            ],
            [
                'name' => 'Eng odobli guruh',
                'badge' => 'Diplom',
                'description' => 'Yil davomida eng namunali va intizomli guruh deb e\'tirof etilganligi uchun.',
                'category' => 'Ichki',
                'image' => 'achievements/a7.webp'
            ],
            [
                'name' => 'Mohir qo\'llar',
                'badge' => 'Bronza medal',
                'description' => 'Loydan yasash va plastilin mahorati bo\'yicha o\'tkazilgan ko\'rgazma g\'olibi.',
                'category' => 'Tuman',
                'image' => 'achievements/a8.webp'
            ],
            [
                'name' => 'Tabiat do\'stlari',
                'badge' => 'Yashil belgi',
                'description' => 'Ekologik loyihalar va bog\'chamiz bog\'ini parvarishlashdagi faollik uchun.',
                'category' => 'Ichki',
                'image' => 'achievements/a9.webp'
            ],
            [
                'name' => 'Ingliz tili bilimdoni',
                'badge' => 'Sertifikat',
                'description' => '"Early English" dasturi bo\'yicha eng yaxshi o\'zlashtirish ko\'rsatkichi.',
                'category' => 'Maktabgacha ta\'lim',
                'image' => 'achievements/a10.webp'
            ],
        ];

        foreach ($achievements as $ach) {
            Achievement::create($ach);
        }

        // 3. Statistikalar
        AchievementStats::create([
            'olympiad_winners' => 45,
            'maktab_tayyorlov' => 98,
            'iqtidorli_bolalar' => 120,
            'jami_yutuqlar' => 250,
        ]);
    }
}
