<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Teacher\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Teacher\TeacherResource;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use App\MoonShine\Resources\Staff\StaffResource;
use App\MoonShine\Resources\Group\GroupResource;
use Throwable;


/**
 * @extends FormPage<TeacherResource>
 */
class TeacherFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make("Tarbiyachi qo'shish", [
                ID::make(),

                // Kategoriya: Tarbiyachi yoki Yordam tarbiyachi
                BelongsTo::make('Kategoriya', 'staff', 'category', StaffResource::class)
                    ->required()
                    ->searchable(),

                // Tarbiyachi biriktirilgan guruh
                BelongsTo::make('Guruh', 'group', 'name', GroupResource::class)
                    ->nullable()
                    ->searchable(),

                Text::make('Ism', 'name')->required(),
                Text::make('Fan / Lavozim', 'subject'),
                Textarea::make('Bio', 'bio')->required(),
                Image::make('Rasm', 'image')
                    ->removable()
                    ->dir('teachers')
                    ->allowedExtensions(['jpg', 'jpeg', 'png', 'webp']),
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(DataWrapperContract $item): array
    {
        return [];
    }

    /**
     * @param  FormBuilder  $component
     *
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
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
