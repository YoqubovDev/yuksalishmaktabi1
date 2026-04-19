<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Staff;

use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;
use App\MoonShine\Resources\Staff\Pages\StaffIndexPage;
use App\MoonShine\Resources\Staff\Pages\StaffFormPage;
use App\MoonShine\Resources\Staff\Pages\StaffDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Staff, StaffIndexPage, StaffFormPage, StaffDetailPage>
 */
class StaffResource extends ModelResource
{
    protected string $model = Staff::class;

    protected string $title = 'Hodim toifasi';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            StaffIndexPage::class,
            StaffFormPage::class,
            StaffDetailPage::class,
        ];
    }
}
