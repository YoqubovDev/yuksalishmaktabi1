<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\TeacherStats;

use Illuminate\Database\Eloquent\Model;
use App\Models\TeacherStats;
use App\MoonShine\Resources\TeacherStats\Pages\TeacherStatsIndexPage;
use App\MoonShine\Resources\TeacherStats\Pages\TeacherStatsFormPage;
use App\MoonShine\Resources\TeacherStats\Pages\TeacherStatsDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<TeacherStats, TeacherStatsIndexPage, TeacherStatsFormPage, TeacherStatsDetailPage>
 */
class TeacherStatsResource extends ModelResource
{
    protected string $model = TeacherStats::class;

    protected string $title = "O'qituvchilar Statikasi";

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            TeacherStatsIndexPage::class,
            TeacherStatsFormPage::class,
            TeacherStatsDetailPage::class,
        ];
    }
}
