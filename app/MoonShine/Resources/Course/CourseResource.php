<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Course;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\MoonShine\Resources\Course\Pages\CourseIndexPage;
use App\MoonShine\Resources\Course\Pages\CourseFormPage;
use App\MoonShine\Resources\Course\Pages\CourseDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Course, CourseIndexPage, CourseFormPage, CourseDetailPage>
 */
class CourseResource extends ModelResource
{
    protected string $model = Course::class;

    protected string $title = 'Bizning kurslar';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            CourseIndexPage::class,
            CourseFormPage::class,
            CourseDetailPage::class,
        ];
    }
}
