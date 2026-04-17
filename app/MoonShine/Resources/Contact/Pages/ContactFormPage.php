<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Contact\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Phone;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Email;
use MoonShine\UI\Fields\Url;
use MoonShine\UI\Components\Layout\Box;
use Throwable;

class ContactFormPage extends FormPage
{
    /**
     * @return list<ComponentContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make('Asosiy ma\'lumotlar', [
                ID::make(),
                Text::make('Manzil', 'address')->required(),
                Phone::make('Telefon', 'phone')->required(),
                Email::make('Email', 'email')->nullable(),
                Text::make('Ish vaqti', 'work_time')->placeholder('Masalan: 08:00 - 18:00'),
                Text::make('Tushlik vaqti', 'lunch_time')->placeholder('Masalan: 13:00 - 14:00'),
            ]),

            Box::make('Transport va Lokatsiya', [
                Text::make('Avtobus', 'bus'),
                Text::make('Marshrut taksi', 'marshrut'),
                Text::make('Yaqin bekat', 'stop'),
                Url::make('Google Maps Link', 'map_link'),
            ]),

            Box::make('Ijtimoiy tarmoqlar', [
                Url::make('Telegram', 'telegram'),
                Url::make('Instagram', 'instagram'),
                Url::make('Facebook', 'facebook'),
                Url::make('Youtube', 'youtube'),
            ]),
        ];
    }
}
