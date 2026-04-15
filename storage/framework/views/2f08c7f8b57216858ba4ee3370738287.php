<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'value' => null,
    'component' => null,
    'componentName' => '',
    'buttons' => [],
    'isNullable' => false,
    'isDeduplicate' => false,
    'isSearchable' => false,
    'isAsyncSearch' => false,
    'isSelectMode' => false,
    'isTreeMode' => false,
    'isHorizontalMode' => false,
    'isPivotModalMode' => false,
    'treeHtml' => '',
    'listHtml' => '',
    'asyncSearchUrl' => '',
    'isCreatable' => false,
    'createButton' => '',
    'fragmentUrl' => '',
    'relationName' => '',
    'translates' => [],
    'settings' => [],
    'plugins' => [],
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
    'value' => null,
    'component' => null,
    'componentName' => '',
    'buttons' => [],
    'isNullable' => false,
    'isDeduplicate' => false,
    'isSearchable' => false,
    'isAsyncSearch' => false,
    'isSelectMode' => false,
    'isTreeMode' => false,
    'isHorizontalMode' => false,
    'isPivotModalMode' => false,
    'treeHtml' => '',
    'listHtml' => '',
    'asyncSearchUrl' => '',
    'isCreatable' => false,
    'createButton' => '',
    'fragmentUrl' => '',
    'relationName' => '',
    'translates' => [],
    'settings' => [],
    'plugins' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div x-id="['belongs-to-many']"
     :id="$id('belongs-to-many')"
     data-show-when-field="<?php echo e($attributes->get('name')); ?>"
     data-validation-field="<?php echo e($relationName); ?>"
>
    <?php if($isCreatable): ?>
        <?php echo $createButton; ?>


        <?php if (isset($component)) { $__componentOriginal7bab788aed2a0e8938609bb9914a586d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bab788aed2a0e8938609bb9914a586d = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Layout\Divider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Layout\Divider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bab788aed2a0e8938609bb9914a586d)): ?>
<?php $attributes = $__attributesOriginal7bab788aed2a0e8938609bb9914a586d; ?>
<?php unset($__attributesOriginal7bab788aed2a0e8938609bb9914a586d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bab788aed2a0e8938609bb9914a586d)): ?>
<?php $component = $__componentOriginal7bab788aed2a0e8938609bb9914a586d; ?>
<?php unset($__componentOriginal7bab788aed2a0e8938609bb9914a586d); ?>
<?php endif; ?>

        <?php $__env->startFragment($relationName); ?>
            <div x-data="fragment('<?php echo e($fragmentUrl); ?>')"
                 <?php echo MoonShine\Support\AlpineJs::eventBlade('fragment_updated', $relationName, 'fragmentUpdate'); ?>
            >
        <?php endif; ?>
            <?php if($isPivotModalMode): ?>
                <?php echo $component; ?>

            <?php elseif($isSelectMode): ?>
                <?php if (isset($component)) { $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.select','data' => ['attributes' => $attributes->merge([
                        'multiple' => true
                    ]),'nullable' => $isNullable,'searchable' => $isSearchable,'values' => $values,'asyncRoute' => $isAsyncSearch ? $asyncSearchUrl : null,'settings' => $settings,'plugins' => $plugins]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->merge([
                        'multiple' => true
                    ])),'nullable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isNullable),'searchable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isSearchable),'values' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($values),'asyncRoute' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isAsyncSearch ? $asyncSearchUrl : null),'settings' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($settings),'plugins' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($plugins)]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $attributes = $__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__attributesOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b)): ?>
<?php $component = $__componentOriginal73c6f62b756759d0cfcff0c734cdf46b; ?>
<?php unset($__componentOriginal73c6f62b756759d0cfcff0c734cdf46b); ?>
<?php endif; ?>
            <?php elseif($isTreeMode): ?>
                <div x-data="belongsToMany" x-init='tree(<?php echo json_encode($keys, 15, 512) ?>)'>
                    <?php echo $treeHtml; ?>

                </div>
            <?php elseif($isHorizontalMode): ?>
                <div x-data="belongsToMany" x-init='tree(<?php echo json_encode($keys, 15, 512) ?>)'>
                    <?php echo $listHtml; ?>

                </div>
            <?php else: ?>
                <?php if($isAsyncSearch): ?>
                    <div x-data="belongsToMany">
                        <div class="dropdown">
                            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['xModel' => 'query','@input.debounce' => 'search(\''.e($asyncSearchUrl).'\')','placeholder' => $translates['search']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-model' => 'query','@input.debounce' => 'search(\''.e($asyncSearchUrl).'\')','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($translates['search'])]); ?>
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
                            <div class="dropdown-body mt-1" :class="{ 'pointer-events-auto visible opacity-100': query.length && match.length }">
                                <div class="dropdown-content">
                                    <ul class="dropdown-menu">
                                        <template x-for="(item, key) in match">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);"
                                                   class="dropdown-menu-link flex gap-x-2 items-center"
                                                   @click.prevent="select(item, <?php echo e($isDeduplicate ? 1 : 0); ?>)"
                                                >
                                                    <template x-if="item?.properties?.image">
                                                        <div
                                                            class="zoom-in h-10 w-10 overflow-hidden rounded-md"
                                                        >
                                                            <img class="h-full w-full object-cover"
                                                                 :src="item.properties.image.src"
                                                                 alt=""
                                                            >
                                                        </div>
                                                    </template>

                                                    <span x-text="item.label" />
                                                </a>
                                            </li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php if (isset($component)) { $__componentOriginal7bab788aed2a0e8938609bb9914a586d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7bab788aed2a0e8938609bb9914a586d = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Layout\Divider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.divider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Layout\Divider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7bab788aed2a0e8938609bb9914a586d)): ?>
<?php $attributes = $__attributesOriginal7bab788aed2a0e8938609bb9914a586d; ?>
<?php unset($__attributesOriginal7bab788aed2a0e8938609bb9914a586d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bab788aed2a0e8938609bb9914a586d)): ?>
<?php $component = $__componentOriginal7bab788aed2a0e8938609bb9914a586d; ?>
<?php unset($__componentOriginal7bab788aed2a0e8938609bb9914a586d); ?>
<?php endif; ?>

                        <div x-data="belongsToMany"
                             x-init='pivot(<?php echo json_encode($keys, 15, 512) ?>)'
                             class="js-pivot-table"
                             data-table-name="<?php echo e($componentName); ?>"
                        >
                            <?php if (isset($component)) { $__componentOriginal6f085d696dd7d828147cf91e90b3540c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f085d696dd7d828147cf91e90b3540c = $attributes; } ?>
<?php $component = MoonShine\UI\Components\ActionGroup::resolve(['actions' => $buttons] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\ActionGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f085d696dd7d828147cf91e90b3540c)): ?>
<?php $attributes = $__attributesOriginal6f085d696dd7d828147cf91e90b3540c; ?>
<?php unset($__attributesOriginal6f085d696dd7d828147cf91e90b3540c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f085d696dd7d828147cf91e90b3540c)): ?>
<?php $component = $__componentOriginal6f085d696dd7d828147cf91e90b3540c; ?>
<?php unset($__componentOriginal6f085d696dd7d828147cf91e90b3540c); ?>
<?php endif; ?>

                            <?php echo $component; ?>

                        </div>
                    </div>
                <?php else: ?>
                    <div x-data="belongsToMany" x-init='pivot(<?php echo json_encode($keys, 15, 512) ?>)'>
                        <?php if (isset($component)) { $__componentOriginal6f085d696dd7d828147cf91e90b3540c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f085d696dd7d828147cf91e90b3540c = $attributes; } ?>
<?php $component = MoonShine\UI\Components\ActionGroup::resolve(['actions' => $buttons] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::action-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\ActionGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f085d696dd7d828147cf91e90b3540c)): ?>
<?php $attributes = $__attributesOriginal6f085d696dd7d828147cf91e90b3540c; ?>
<?php unset($__attributesOriginal6f085d696dd7d828147cf91e90b3540c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f085d696dd7d828147cf91e90b3540c)): ?>
<?php $component = $__componentOriginal6f085d696dd7d828147cf91e90b3540c; ?>
<?php unset($__componentOriginal6f085d696dd7d828147cf91e90b3540c); ?>
<?php endif; ?>

                        <?php echo $component; ?>

                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php if($isCreatable): ?>
            </div>
            <?php echo $__env->stopFragment(); ?>
        <?php endif; ?>
</div>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/fields/relationships/belongs-to-many.blade.php ENDPATH**/ ?>