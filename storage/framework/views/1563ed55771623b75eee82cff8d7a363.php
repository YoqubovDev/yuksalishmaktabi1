<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'searchable' => false,
    'loader' => true,
    'searchUrl' => '',
    'searchValue' => '',
    'searchPlaceholder' => '',
    'skeleton' => null,
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
    'searchable' => false,
    'loader' => true,
    'searchUrl' => '',
    'searchValue' => '',
    'searchPlaceholder' => '',
    'skeleton' => null,
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

<?php if($searchable || trim(($topLeft ?? '')) !== ''): ?>
<?php if (isset($component)) { $__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Layout\Flex::resolve(['justifyAlign' => 'start'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.flex'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Layout\Flex::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if($searchable): ?>
        <?php if (isset($component)) { $__componentOriginala83b3859802539a406efce525ddd52da = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala83b3859802539a406efce525ddd52da = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.index','data' => ['raw' => true,'action' => ''.e($searchUrl).'','@submit.prevent' => 'asyncFormRequest']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['raw' => true,'action' => ''.e($searchUrl).'','@submit.prevent' => 'asyncFormRequest']); ?>
            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['name' => 'search','type' => 'search','value' => ''.e($searchValue).'','placeholder' => ''.e($searchPlaceholder).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'search','type' => 'search','value' => ''.e($searchValue).'','placeholder' => ''.e($searchPlaceholder).'']); ?>
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

    <?php echo $topLeft ?? ''; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00)): ?>
<?php $attributes = $__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00; ?>
<?php unset($__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00)): ?>
<?php $component = $__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00; ?>
<?php unset($__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00); ?>
<?php endif; ?>
<?php endif; ?>

<?php if(trim(($topRight ?? '')) !== ''): ?>
<?php if (isset($component)) { $__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Layout\Flex::resolve(['justifyAlign' => 'end'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.flex'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Layout\Flex::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo $topRight ?? ''; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00)): ?>
<?php $attributes = $__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00; ?>
<?php unset($__attributesOriginal6f5d59e1b16dc39073b8ba1afc093f00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00)): ?>
<?php $component = $__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00; ?>
<?php unset($__componentOriginal6f5d59e1b16dc39073b8ba1afc093f00); ?>
<?php endif; ?>
<?php endif; ?>

<?php if(($searchable || trim(($topLeft ?? '')) !== '') || trim(($topRight ?? '')) !== ''): ?>
<?php if (isset($component)) { $__componentOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Layout\LineBreak::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::layout.line-break'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Layout\LineBreak::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd)): ?>
<?php $attributes = $__attributesOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd; ?>
<?php unset($__attributesOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd)): ?>
<?php $component = $__componentOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd; ?>
<?php unset($__componentOriginalf7ccc8ac785fae4b6d5a48d975a0dcdd); ?>
<?php endif; ?>
<?php endif; ?>

<?php if($skeleton ?? false): ?>
    <?php if (isset($component)) { $__componentOriginal90379400dafb5f5d8df67a703dd28246 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90379400dafb5f5d8df67a703dd28246 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.skeleton','data' => ['xShow' => 'loading']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::skeleton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'loading']); ?>
        <?php echo $skeleton; ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90379400dafb5f5d8df67a703dd28246)): ?>
<?php $attributes = $__attributesOriginal90379400dafb5f5d8df67a703dd28246; ?>
<?php unset($__attributesOriginal90379400dafb5f5d8df67a703dd28246); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90379400dafb5f5d8df67a703dd28246)): ?>
<?php $component = $__componentOriginal90379400dafb5f5d8df67a703dd28246; ?>
<?php unset($__componentOriginal90379400dafb5f5d8df67a703dd28246); ?>
<?php endif; ?>
<?php elseif($loader): ?>
<?php if (isset($component)) { $__componentOriginalfafd141889f3559e22f375cbbe7394f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfafd141889f3559e22f375cbbe7394f5 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Loader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Loader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'loading']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfafd141889f3559e22f375cbbe7394f5)): ?>
<?php $attributes = $__attributesOriginalfafd141889f3559e22f375cbbe7394f5; ?>
<?php unset($__attributesOriginalfafd141889f3559e22f375cbbe7394f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfafd141889f3559e22f375cbbe7394f5)): ?>
<?php $component = $__componentOriginalfafd141889f3559e22f375cbbe7394f5; ?>
<?php unset($__componentOriginalfafd141889f3559e22f375cbbe7394f5); ?>
<?php endif; ?>
<?php endif; ?>

<div <?php if(($skeleton ?? false) || $loader): ?> x-show="!loading" <?php endif; ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH /home/shehroz/example-app/vendor/moonshine/moonshine/src/Laravel/src/Providers/../../../UI/resources/views/components/iterable-wrapper.blade.php ENDPATH**/ ?>