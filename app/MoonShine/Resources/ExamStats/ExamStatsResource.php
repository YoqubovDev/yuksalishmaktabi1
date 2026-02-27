<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ExamStats;

use Illuminate\Database\Eloquent\Model;
use App\Models\ExamStats;
use App\MoonShine\Resources\ExamStats\Pages\ExamStatsIndexPage;
use App\MoonShine\Resources\ExamStats\Pages\ExamStatsFormPage;
use App\MoonShine\Resources\ExamStats\Pages\ExamStatsDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<ExamStats, ExamStatsIndexPage, ExamStatsFormPage, ExamStatsDetailPage>
 */
class ExamStatsResource extends ModelResource
{
    protected string $model = ExamStats::class;

    protected string $title = 'Imtihon Darajalari';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ExamStatsIndexPage::class,
            ExamStatsFormPage::class,
            ExamStatsDetailPage::class,
        ];
    }
}
