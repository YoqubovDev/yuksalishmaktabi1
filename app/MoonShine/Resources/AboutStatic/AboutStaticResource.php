<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\AboutStatic;

use Illuminate\Database\Eloquent\Model;
use App\Models\AboutStatic;
use App\MoonShine\Resources\AboutStatic\Pages\AboutStaticIndexPage;
use App\MoonShine\Resources\AboutStatic\Pages\AboutStaticFormPage;
use App\MoonShine\Resources\AboutStatic\Pages\AboutStaticDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<AboutStatic, AboutStaticIndexPage, AboutStaticFormPage, AboutStaticDetailPage>
 */
class AboutStaticResource extends ModelResource
{
    protected string $model = AboutStatic::class;

    protected string $title = 'About Statics';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            AboutStaticIndexPage::class,
            AboutStaticFormPage::class,
            AboutStaticDetailPage::class,
        ];
    }
}
