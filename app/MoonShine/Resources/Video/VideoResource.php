<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Video;

use Illuminate\Database\Eloquent\Model;
use App\Models\Video;
use App\MoonShine\Resources\Video\Pages\VideoIndexPage;
use App\MoonShine\Resources\Video\Pages\VideoFormPage;
use App\MoonShine\Resources\Video\Pages\VideoDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Video, VideoIndexPage, VideoFormPage, VideoDetailPage>
 */
class VideoResource extends ModelResource
{
    protected string $model = Video::class;

    protected string $title = 'Videolar';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            VideoIndexPage::class,
            VideoFormPage::class,
            VideoDetailPage::class,
        ];
    }
}
