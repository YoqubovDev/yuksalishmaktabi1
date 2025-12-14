<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Departments;

use Illuminate\Database\Eloquent\Model;
use App\Models\Departments;
use App\MoonShine\Resources\Departments\Pages\DepartmentsIndexPage;
use App\MoonShine\Resources\Departments\Pages\DepartmentsFormPage;
use App\MoonShine\Resources\Departments\Pages\DepartmentsDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Departments, DepartmentsIndexPage, DepartmentsFormPage, DepartmentsDetailPage>
 */
class DepartmentsResource extends ModelResource
{
    protected string $model = Departments::class;

    protected string $title = "Bo'limlarimiz";

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            DepartmentsIndexPage::class,
            DepartmentsFormPage::class,
            DepartmentsDetailPage::class,
        ];
    }
}
