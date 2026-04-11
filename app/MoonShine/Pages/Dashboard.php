<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use App\Models\News;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\User;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Metrics\Wrapped\ValueMetric;
#[\MoonShine\MenuManager\Attributes\SkipMenu]

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function getTitle(): string
    {
        return $this->title ?: 'Dashboard';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        return [
            Grid::make([
                Column::make([
                    ValueMetric::make(__('messages.news'))
                        ->value(News::count())
                        ->icon('megaphone'),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make(__('messages.teachers'))
                        ->value(Teacher::count())
                        ->icon('user'),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make(__('messages.subjects'))
                        ->value(Course::count())
                        ->icon('book-open'),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make(__('messages.users'))
                        ->value(User::count())
                        ->icon('users'),
                ])->columnSpan(3),
            ])
        ];
    }
}
