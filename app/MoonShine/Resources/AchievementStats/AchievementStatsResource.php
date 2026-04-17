<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\AchievementStats;

use Illuminate\Database\Eloquent\Model;
use App\Models\AchievementStats;
use App\MoonShine\Resources\AchievementStats\Pages\AchievementStatsIndexPage;
use App\MoonShine\Resources\AchievementStats\Pages\AchievementStatsFormPage;
use App\MoonShine\Resources\AchievementStats\Pages\AchievementStatsDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<AchievementStats, AchievementStatsIndexPage, AchievementStatsFormPage, AchievementStatsDetailPage>
 */
class AchievementStatsResource extends ModelResource
{
    protected string $model = AchievementStats::class;

    protected string $title = 'Yutuq statistikasi';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            AchievementStatsIndexPage::class,
            AchievementStatsFormPage::class,
            AchievementStatsDetailPage::class,
        ];
    }
}
