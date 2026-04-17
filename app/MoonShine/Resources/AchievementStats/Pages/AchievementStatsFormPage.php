<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\AchievementStats\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Components\Layout\Box;
use Throwable;

class AchievementStatsFormPage extends FormPage
{
    /**
     * @return list<ComponentContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Number::make('Olimpiada g\'oliblari', 'olympiad_winners')->required(),
                Number::make('Maktabga tayyorgarlik %', 'maktab_tayyorlov')->required(),
                Number::make('Iqtidorli bolalar', 'iqtidorli_bolalar')->required(),
                Number::make('Jami yutuqlar', 'jami_yutuqlar')->required(),
            ]),
        ];
    }
}
