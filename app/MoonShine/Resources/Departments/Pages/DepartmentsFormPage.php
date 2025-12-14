<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Departments\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Departments\DepartmentsResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;


/**
 * @extends FormPage<DepartmentsResource>
 */
class DepartmentsFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Bo‘lim nomi', 'name')->required(),
                Select::make('Ikonka class', 'icon')
                ->options([
                    'fas fa-flask text-2xl' => 'Tabiiy fanlar (flask)',
                    'fas fa-calculator text-2xl' => 'Matematika (calculator)',
                    'fas fa-language text-2xl' => 'Chet tillari (language)',
                    'fas fa-book text-2xl' => 'Gumanitar fanlar (book)',
                    'fas fa-laptop-code text-2xl' => 'Texnika (laptop-code)',
                    'fas fa-palette text-2xl' => 'San’at (palette)',
                    // Yangi bo‘limlar qo’shish uchun option qo’shsa bo’ladi
                ])
                    ->nullable()
                    ->searchable(),
                Textarea::make('Taʼrif', 'description'),
                Number::make('O‘qituvchilar soni', 'teachers_count')->default(0),
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
