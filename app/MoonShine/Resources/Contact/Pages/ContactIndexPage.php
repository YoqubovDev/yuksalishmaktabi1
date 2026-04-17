<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Contact\Pages;

use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Phone;
use MoonShine\UI\Fields\Text;
use Throwable;

class ContactIndexPage extends IndexPage
{
    /**
     * @return list<ComponentContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Manzil', 'address'),
            Phone::make('Telefon', 'phone'),
            Text::make('Email', 'email'),
            Text::make('Ish vaqti', 'work_time'),
            Text::make('Telegram', 'telegram'),
        ];
    }
}
