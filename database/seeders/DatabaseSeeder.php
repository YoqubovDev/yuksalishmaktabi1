<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutStatic;
use App\Models\TeacherStats;
use App\Models\ExamStats;
use App\Models\News;
use App\Models\Achievement;
use App\Models\Contact;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Staff / Leadership
        $this->call(StaffSeeder::class);
        $this->call(GroupStudentSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(ReceptionSeeder::class);

        // 2. About Statistics
        AboutStatic::firstOrCreate([
            'students_count' => '422',
            'qualified_teachers' => '37',
            'graduation_rate' => '100',
        ]);

        // 3. Teacher Statistics
        TeacherStats::firstOrCreate([
            'asosiy' => '120',
            'ilmiy' => '25',
            'kurator' => '15',
            'tashqi' => '40',
        ]);



        // 5. News
        $newsItems = [
            [
                'title' => 'Yangi laboratoriya ochildi',
                'excerpt' => 'Zamonaviy kimyo laboratoriyasi talabalar uchun ochildi',
                'content' => 'Sevinch - 475-chi sonli bolalar bog`chasida zamonaviy kimyo laboratoriyasi ochildi. Bu yerda bolalar qiziqarli tajribalar o\'tkazishlari mumkin.',
                'image' => null, // Optional
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'Xalqaro hamkorlik kengaydi',
                'excerpt' => 'Chet el ta\'lim muassasalari bilan yangi shartnomalar imzolandi',
                'content' => 'Bog\'chamiz xalqaro standartlarga javob berish uchun chet el pedagogik jamoalari bilan tajriba almashishni yo\'lga qo\'ydi.',
                'image' => null,
                'published_at' => Carbon::now()->subDays(10),
            ],
            [
                'title' => 'Bolalar yutuqlari',
                'excerpt' => 'Bizning tarbiyalanuvchilar ko\'rik-tanlovda g\'olib bo\'ldi',
                'content' => 'Tarbiyalanuvchilarimiz tuman miqyosida o\'tkazilgan iqtidorli bolalar ko\'rik-tanlovida faxrli o\'rinlarni egallashdi.',
                'image' => null,
                'published_at' => Carbon::now()->subDays(15),
            ]
        ];

        foreach ($newsItems as $news) {
            News::firstOrCreate(
                ['title' => $news['title']],
                [
                    'slug' => Str::slug($news['title']),
                    'excerpt' => $news['excerpt'],
                    'content' => $news['content'],
                    'image' => $news['image'],
                    'published_at' => $news['published_at'],
                ]
            );
        }


    }
}
