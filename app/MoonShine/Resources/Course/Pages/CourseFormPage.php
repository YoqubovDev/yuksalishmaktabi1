<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Course\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Course\CourseResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use Throwable;


/**
 * @extends FormPage<CourseResource>
 */
class CourseFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Kurs nomi', 'title')
                    ->placeholder('Masalan: Chet tillari')
                    ->required(),
                Textarea::make('Tavsif', 'description')
                    ->required(),
                Text::make('Fanlar', 'subjects')
                    ->placeholder('Masalan: Ingliz, Italyan, Rus tillari'),
                Select::make('Ikonka class', 'icon')
                    ->options([
                        'flask' => 'Tabiiy fanlar (flask)',
                        'engineering' => 'Muhandislik',
                        'economics' => 'Iqtisodiyot',
                        'languages' => 'Chet tillari',
                        'it' => 'IT va Dasturlash',
                        'art' => 'San\'at va dizayn',
                        'fas fa-palette text-2xl' => 'San’at (palette)',
                    ])
                    ->nullable()
                    ->searchable(),
                Text::make('Davomiyligi', 'duration'),
                Number::make('Talabalar soni', 'student_count')->min(0),
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
