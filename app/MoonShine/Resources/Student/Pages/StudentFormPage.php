<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Student\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use App\MoonShine\Resources\Group\GroupResource;
use App\Models\Group;
use Throwable;

/**
 * @extends FormPage<StudentResource>
 */
class StudentFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make()->sortable(),
                Text::make('F.I.SH', 'name')->required(),
                BelongsTo::make('Guruh', 'group', formatted: static fn (Group $model) => $model->name, resource: GroupResource::class)->required(),
                Image::make('Rasm', 'image')->dir('students')->removable()->required()
                    ->allowedExtensions(['jpg', 'jpeg', 'png', 'webp']),
                Textarea::make('Malumot', 'bio')->nullable(),
            ]),
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
