<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'route' => '',
    'logOutRoute' => '',
    'avatar' => '',
    'nameOfUser' => '',
    'username' => '',
    'menu' => null,
    'translates' => [],
    'before',
    'after',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'route' => '',
    'logOutRoute' => '',
    'avatar' => '',
    'nameOfUser' => '',
    'username' => '',
    'menu' => null,
    'translates' => [],
    'before',
    'after',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php echo e($before ?? ''); ?>


<?php if(isset($slot) && $slot->isNotEmpty()): ?>
    <?php echo e($slot); ?>

<?php else: ?>
    <div <?php echo e($attributes->merge(['class' => 'profile'])); ?>>
        <?php if($route && $menu === null): ?>
        <a href="<?php echo e($route); ?>" class="profile-main">
        <?php endif; ?>
            <?php if($avatar && $menu === null): ?>
                <div class="profile-photo">
                    <img
                        class="h-full w-full object-cover"
                        src="<?php echo e($avatar); ?>"
                        alt="<?php echo e($nameOfUser); ?>"
                    />
                </div>
            <?php endif; ?>

            <?php if($menu === null): ?>
                <div class="profile-info">
                    <h5 class="name"><?php echo e($nameOfUser); ?></h5>
                    <div class="email"><?php echo e($username); ?></div>
                </div>
            <?php endif; ?>
        <?php if($route && $menu === null): ?>
        </a>
        <?php endif; ?>

        <?php if($menu === null): ?>
            <?php if($logOutRoute): ?>
                <?php if (isset($component)) { $__componentOriginala83b3859802539a406efce525ddd52da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala83b3859802539a406efce525ddd52da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.index','data' => ['class' => 'profile-actions','action' => $logOutRoute,'raw' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'profile-actions','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logOutRoute),'raw' => true]); ?>
                    <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'hidden','name' => '_method','value' => 'delete']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'hidden','name' => '_method','value' => 'delete']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginaldafd5965086f19145b581eeb5ef12cdb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.button','data' => ['raw' => true,'class' => 'profile-exit btn-fit','title' => 'Logout','type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['raw' => true,'class' => 'profile-exit btn-fit','title' => 'Logout','type' => 'submit']); ?>
                        <?php if (isset($component)) { $__componentOriginale5a015c7e462e0b96985c262dddd7f9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Icon::resolve(['icon' => 'arrow-right-start-on-rectangle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale5a015c7e462e0b96985c262dddd7f9d)): ?>
<?php $attributes = $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d; ?>
<?php unset($__attributesOriginale5a015c7e462e0b96985c262dddd7f9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale5a015c7e462e0b96985c262dddd7f9d)): ?>
<?php $component = $__componentOriginale5a015c7e462e0b96985c262dddd7f9d; ?>
<?php unset($__componentOriginale5a015c7e462e0b96985c262dddd7f9d); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $attributes = $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $component = $__componentOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $attributes = $__attributesOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__attributesOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $component = $__componentOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__componentOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
            <?php endif; ?>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Dropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('title', null, []); ?> 
                    <div class="profile-main">
                        <?php if($avatar): ?>
                            <div class="profile-photo">
                                <img
                                    class="h-full w-full object-cover"
                                    src="<?php echo e($avatar); ?>"
                                    alt="<?php echo e($nameOfUser); ?>"
                                />
                            </div>
                        <?php endif; ?>

                        <div class="profile-info">
                            <h5 class="name"><?php echo e($nameOfUser); ?></h5>
                            <div class="email"><?php echo e($username); ?></div>
                        </div>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('toggler', null, []); ?> 
                    <div class="profile-photo">
                        <img
                            class="h-full w-full object-cover"
                            src="<?php echo e($avatar); ?>"
                            alt="<?php echo e($nameOfUser); ?>"
                        />
                    </div>
                 <?php $__env->endSlot(); ?>

                <?php if($logOutRoute): ?>
                     <?php $__env->slot('footer', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginala83b3859802539a406efce525ddd52da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala83b3859802539a406efce525ddd52da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.index','data' => ['action' => $logOutRoute,'raw' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($logOutRoute),'raw' => true]); ?>
                            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'hidden','name' => '_method','value' => 'delete']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'hidden','name' => '_method','value' => 'delete']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginaldafd5965086f19145b581eeb5ef12cdb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.button','data' => ['raw' => true,'class' => 'btn','type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['raw' => true,'class' => 'btn','type' => 'submit']); ?>
                                <?php if (isset($component)) { $__componentOriginale5a015c7e462e0b96985c262dddd7f9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Icon::resolve(['icon' => 'arrow-right-start-on-rectangle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale5a015c7e462e0b96985c262dddd7f9d)): ?>
<?php $attributes = $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d; ?>
<?php unset($__attributesOriginale5a015c7e462e0b96985c262dddd7f9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale5a015c7e462e0b96985c262dddd7f9d)): ?>
<?php $component = $__componentOriginale5a015c7e462e0b96985c262dddd7f9d; ?>
<?php unset($__componentOriginale5a015c7e462e0b96985c262dddd7f9d); ?>
<?php endif; ?>
                                <?php echo e($translates['logout'] ?? 'Log out'); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $attributes = $__attributesOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__attributesOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb)): ?>
<?php $component = $__componentOriginaldafd5965086f19145b581eeb5ef12cdb; ?>
<?php unset($__componentOriginaldafd5965086f19145b581eeb5ef12cdb); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $attributes = $__attributesOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__attributesOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala83b3859802539a406efce525ddd52da)): ?>
<?php $component = $__componentOriginala83b3859802539a406efce525ddd52da; ?>
<?php unset($__componentOriginala83b3859802539a406efce525ddd52da); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                <?php endif; ?>

                <?php if(is_iterable($menu)): ?>
                    <ul class="dropdown-menu">
                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="dropdown-menu-item">
                                <?php echo $link; ?>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php else: ?>
                    <?php echo e($menu); ?>

                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3)): ?>
<?php $attributes = $__attributesOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3; ?>
<?php unset($__attributesOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3)): ?>
<?php $component = $__componentOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3; ?>
<?php unset($__componentOriginal0f1ffb27451a1bf8bbfbb41fb0a08cc3); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php echo e($after ?? ''); ?>


<?php /**PATH /home/shehroz/example-app/vendor/moonshine/moonshine/src/Laravel/src/Providers/../../../UI/resources/views/components/layout/profile.blade.php ENDPATH**/ ?>