<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Group;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use App\MoonShine\Resources\Group\Pages\GroupIndexPage;
use App\MoonShine\Resources\Group\Pages\GroupFormPage;
use App\MoonShine\Resources\Group\Pages\GroupDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Group, GroupIndexPage, GroupFormPage, GroupDetailPage>
 */
class GroupResource extends ModelResource
{
    protected string $model = Group::class;

    protected string $title = 'Groupalar';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            GroupIndexPage::class,
            GroupFormPage::class,
            GroupDetailPage::class,
        ];
    }
}
