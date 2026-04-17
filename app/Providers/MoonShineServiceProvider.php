<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRole\MoonShineUserRoleResource;
use App\MoonShine\Resources\Achievement\AchievementResource;
use App\MoonShine\Resources\Contact\ContactResource;
use App\MoonShine\Resources\Departments\DepartmentsResource;
use App\MoonShine\Resources\Group\GroupResource;
use App\MoonShine\Resources\HomeSlider\HomeSliderResource;
use App\MoonShine\Resources\News\NewsResource;
use App\MoonShine\Resources\PhotoCard\PhotoCardResource;
use App\MoonShine\Resources\Reception\ReceptionResource;
use App\MoonShine\Resources\Slider\SliderResource;
use App\MoonShine\Resources\AboutStatic\AboutStaticResource;
use App\MoonShine\Resources\TeacherStats\TeacherStatsResource;
use App\MoonShine\Resources\AchievementStats\AchievementStatsResource;
use App\MoonShine\Resources\StaffCategory\StaffCategoryResource;
use App\MoonShine\Resources\Student\StudentResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  CoreContract<MoonShineConfigurator>  $core
     */
    public function boot(CoreContract $core): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                AchievementResource::class,
                ContactResource::class,
                DepartmentsResource::class,
                GroupResource::class,
                HomeSliderResource::class,
                NewsResource::class,
                PhotoCardResource::class,
                ReceptionResource::class,
                SliderResource::class,
                AboutStaticResource::class,
                TeacherStatsResource::class,
                AchievementStatsResource::class,
                StaffCategoryResource::class,
                StudentResource::class,
            ])
            ->pages([
                ...$core->getConfig()->getPages(),
            ])
        ;
    }
}
