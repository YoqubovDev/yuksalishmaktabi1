<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'components' => [],
    'bulkButtons' => [],
    'asyncUrl' => '',
    'async' => false,
    'notfound' => false,
    'colSpan' => 12,
    'adaptiveColSpan' => 12,
    'name' => 'default',
    'translates' => [],
    'searchable' => false,
    'searchValue' => '',
    'topLeft' => null,
    'topRight' => null,
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
    'components' => [],
    'bulkButtons' => [],
    'asyncUrl' => '',
    'async' => false,
    'notfound' => false,
    'colSpan' => 12,
    'adaptiveColSpan' => 12,
    'name' => 'default',
    'translates' => [],
    'searchable' => false,
    'searchValue' => '',
    'topLeft' => null,
    'topRight' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div class="js-cards-builder-container">
    <div x-data="cardsBuilder(
    <?php echo e((int) $async); ?>,
    '<?php echo e($asyncUrl); ?>'
)"
         <?php echo MoonShine\Support\AlpineJs::eventBladeWhen($async, 'cards_updated', $name, 'asyncRequest'); ?>
        <?php echo e($attributes); ?>

    >
        <?php if (isset($component)) { $__componentOriginalc947d7428c76dc25ba1504c5577c4f49 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc947d7428c76dc25ba1504c5577c4f49 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.iterable-wrapper','data' => ['searchable' => $async && $searchable,'searchPlaceholder' => $translates['search'],'searchValue' => $searchValue,'searchUrl' => $asyncUrl]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::iterable-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['searchable' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($async && $searchable),'search-placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($translates['search']),'search-value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($searchValue),'search-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($asyncUrl)]); ?>
             <?php $__env->slot('topLeft', null, []); ?> 
                <?php echo $topLeft ?? ''; ?>

             <?php $__env->endSlot(); ?>

             <?php $__env->slot('topRight', null, []); ?> 
                <?php echo $topRight ?? ''; ?>

             <?php $__env->endSlot(); ?>

            <?php if($components->isNotEmpty()): ?>
                <?php if (isset($component)) { $__componentOriginal92549e3c286b4ce5bd58a0b73ea14813 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92549e3c286b4ce5bd58a0b73ea14813 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Layout\Grid::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Layout\Grid::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginal2e37ae84d4448d28efad53a0aa65ed52 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e37ae84d4448d28efad53a0aa65ed52 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Layout\Column::resolve(['colSpan' => $colSpan,'adaptiveColSpan' => $adaptiveColSpan] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Layout\Column::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo $card; ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e37ae84d4448d28efad53a0aa65ed52)): ?>
<?php $attributes = $__attributesOriginal2e37ae84d4448d28efad53a0aa65ed52; ?>
<?php unset($__attributesOriginal2e37ae84d4448d28efad53a0aa65ed52); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e37ae84d4448d28efad53a0aa65ed52)): ?>
<?php $component = $__componentOriginal2e37ae84d4448d28efad53a0aa65ed52; ?>
<?php unset($__componentOriginal2e37ae84d4448d28efad53a0aa65ed52); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92549e3c286b4ce5bd58a0b73ea14813)): ?>
<?php $attributes = $__attributesOriginal92549e3c286b4ce5bd58a0b73ea14813; ?>
<?php unset($__attributesOriginal92549e3c286b4ce5bd58a0b73ea14813); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92549e3c286b4ce5bd58a0b73ea14813)): ?>
<?php $component = $__componentOriginal92549e3c286b4ce5bd58a0b73ea14813; ?>
<?php unset($__componentOriginal92549e3c286b4ce5bd58a0b73ea14813); ?>
<?php endif; ?>

                <?php if($hasPaginator): ?>
                    <?php echo $paginator; ?>

                <?php endif; ?>
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginalff7f262ea9804a3a03a910ed0fb8040f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff7f262ea9804a3a03a910ed0fb8040f = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Alert::resolve(['type' => 'default','icon' => 's.no-symbol'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Alert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'my-4']); ?>
                    <?php echo e($translates['notfound']); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff7f262ea9804a3a03a910ed0fb8040f)): ?>
<?php $attributes = $__attributesOriginalff7f262ea9804a3a03a910ed0fb8040f; ?>
<?php unset($__attributesOriginalff7f262ea9804a3a03a910ed0fb8040f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff7f262ea9804a3a03a910ed0fb8040f)): ?>
<?php $component = $__componentOriginalff7f262ea9804a3a03a910ed0fb8040f; ?>
<?php unset($__componentOriginalff7f262ea9804a3a03a910ed0fb8040f); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc947d7428c76dc25ba1504c5577c4f49)): ?>
<?php $attributes = $__attributesOriginalc947d7428c76dc25ba1504c5577c4f49; ?>
<?php unset($__attributesOriginalc947d7428c76dc25ba1504c5577c4f49); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc947d7428c76dc25ba1504c5577c4f49)): ?>
<?php $component = $__componentOriginalc947d7428c76dc25ba1504c5577c4f49; ?>
<?php unset($__componentOriginalc947d7428c76dc25ba1504c5577c4f49); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/cards.blade.php ENDPATH**/ ?>