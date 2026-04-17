<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\AchievementStats\Pages;

use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use Throwable;

class AchievementStatsDetailPage extends DetailPage
{
    /**
     * @return list<ComponentContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make(),
            Number::make('Olimpiada g\'oliblari', 'olympiad_winners'),
            Number::make('Maktabga tayyorgarlik %', 'maktab_tayyorlov'),
            Number::make('Iqtidorli bolalar', 'iqtidorli_bolalar'),
            Number::make('Jami yutuqlar', 'jami_yutuqlar'),
        ];
    }
}
