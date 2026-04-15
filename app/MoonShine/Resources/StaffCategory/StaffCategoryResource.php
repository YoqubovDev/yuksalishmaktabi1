<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\StaffCategory;

use Illuminate\Database\Eloquent\Model;
use App\Models\StaffCategory;
use App\MoonShine\Resources\StaffCategory\Pages\StaffCategoryIndexPage;
use App\MoonShine\Resources\StaffCategory\Pages\StaffCategoryFormPage;
use App\MoonShine\Resources\StaffCategory\Pages\StaffCategoryDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<StaffCategory, StaffCategoryIndexPage, StaffCategoryFormPage, StaffCategoryDetailPage>
 */
class StaffCategoryResource extends ModelResource
{
    protected string $model = StaffCategory::class;

    protected string $title = 'StaffCategories';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            StaffCategoryIndexPage::class,
            StaffCategoryFormPage::class,
            StaffCategoryDetailPage::class,
        ];
    }
}
