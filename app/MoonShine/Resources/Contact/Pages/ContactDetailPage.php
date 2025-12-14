<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Contact\Pages;

use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\Contracts\UI\FieldContract;
use App\MoonShine\Resources\Contact\ContactResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Phone;
use MoonShine\UI\Fields\Text;
use Throwable;


/**
 * @extends DetailPage<ContactResource>
 */
class ContactDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make(),
            Text::make('Address', 'address'),
            Phone::make('Phone', 'phone'),
            Phone::make('Fax', 'fax'),
            Text::make('Email', 'email'),
            Text::make('Lunch Time', 'lunch_time'),
            Text::make('Work Time', 'work_time'),
            Number::make('Bus', 'bus'),
            Number::make('Marshrut', 'marshrut'),
            Text::make('Telegram', 'telegram'),
            Text::make('Facebook', 'facebook'),
            Text::make('Youtube', 'youtube'),
            Text::make('Instagram', 'instagram'),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @param  TableBuilder  $component
     *
     * @return TableBuilder
     */
    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
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
