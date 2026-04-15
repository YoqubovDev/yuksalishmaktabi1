<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Student;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\MoonShine\Resources\Student\Pages\StudentIndexPage;
use App\MoonShine\Resources\Student\Pages\StudentFormPage;
use App\MoonShine\Resources\Student\Pages\StudentDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Student, StudentIndexPage, StudentFormPage, StudentDetailPage>
 */
class StudentResource extends ModelResource
{
    protected string $model = Student::class;

    protected string $title = 'Tarbiylanuvchilar';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            StudentIndexPage::class,
            StudentFormPage::class,
            StudentDetailPage::class,
        ];
    }
}
