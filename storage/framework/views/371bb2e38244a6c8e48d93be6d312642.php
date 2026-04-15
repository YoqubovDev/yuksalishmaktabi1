<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => '',
    'previewLabel' => '',
    'url' => 'javascript:void(0);',
    'icon' => '',
    'onlyIcon' => false,
    'badge' => false,
    'top' => false,
    'hasComponent' => false,
    'component' => null,
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
    'label' => '',
    'previewLabel' => '',
    'url' => 'javascript:void(0);',
    'icon' => '',
    'onlyIcon' => false,
    'badge' => false,
    'top' => false,
    'hasComponent' => false,
    'component' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<a
    href="<?php echo e($url); ?>"
    <?php echo e($attributes?->merge(['class' => 'menu-link'])); ?>

    <?php if($onlyIcon && !$attributes->has('x-data')): ?>
        x-data="navTooltip"
        @mouseenter="toggleTooltip()"
    <?php endif; ?>
>
    <?php if($icon): ?>
        <div class="menu-icon">
            <?php echo $icon; ?>

        </div>
    <?php elseif($onlyIcon): ?>
        <div class="menu-icon">
            <?php if (isset($component)) { $__componentOriginale5a015c7e462e0b96985c262dddd7f9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Icon::resolve(['icon' => 'squares-2x2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
        </div>
    <?php endif; ?>

    <span class="menu-text <?php if($onlyIcon): ?> menu-only-icon <?php endif; ?>"><?php echo e($label); ?></span>

    <?php if($badge !== false): ?>
        <span class="menu-badge"><?php echo e($badge); ?></span>
    <?php endif; ?>
</a>

<?php if($hasComponent): ?>
    <template x-teleport="body">
        <?php echo $component; ?>

    </template>
<?php endif; ?>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/menu/item-link.blade.php ENDPATH**/ ?>