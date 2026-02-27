<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\PhotoCard;

use Illuminate\Database\Eloquent\Model;
use App\Models\PhotoCard;
use App\MoonShine\Resources\PhotoCard\Pages\PhotoCardIndexPage;
use App\MoonShine\Resources\PhotoCard\Pages\PhotoCardFormPage;
use App\MoonShine\Resources\PhotoCard\Pages\PhotoCardDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<PhotoCard, PhotoCardIndexPage, PhotoCardFormPage, PhotoCardDetailPage>
 */
class PhotoCardResource extends ModelResource
{
    protected string $model = PhotoCard::class;

    protected string $title = 'Foto kartalar';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PhotoCardIndexPage::class,
            PhotoCardFormPage::class,
            PhotoCardDetailPage::class,
        ];
    }
}
