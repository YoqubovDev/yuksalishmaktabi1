<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Achievement;

use Illuminate\Database\Eloquent\Model;
use App\Models\Achievement;
use App\MoonShine\Resources\Achievement\Pages\AchievementIndexPage;
use App\MoonShine\Resources\Achievement\Pages\AchievementFormPage;
use App\MoonShine\Resources\Achievement\Pages\AchievementDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Achievement, AchievementIndexPage, AchievementFormPage, AchievementDetailPage>
 */
class AchievementResource extends ModelResource
{
    protected string $model = Achievement::class;

    protected string $title = 'Yutuqlar';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            AchievementIndexPage::class,
            AchievementFormPage::class,
            AchievementDetailPage::class,
        ];
    }
}
