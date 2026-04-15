<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'component',
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
    'component',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div x-id="['has-one']"
     :id="$id('has-one')"
>
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

    <?php echo $component; ?>

</div>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/fields/relationships/has-one.blade.php ENDPATH**/ ?>