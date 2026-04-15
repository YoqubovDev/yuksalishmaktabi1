<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'color' => 'secondary',
    'label' => null,
    'limit' => 150,
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
    'color' => 'secondary',
    'label' => null,
    'limit' => 150,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<span <?php echo e($attributes->merge(['class' => 'pretty-limit'])); ?>

      <?php if($limit): ?> style="--pretty-limit-width: <?php echo e($limit); ?>px" <?php endif; ?>
>
    <span class="pretty-limit-inner <?php echo e($color ? 'pretty-limit-'.$color : ''); ?>">
        <?php if($label): ?>
            <span class="pretty-limit-label"><?php echo e($label); ?></span>
        <?php endif; ?>
        <span class="pretty-limit-value"><?php echo e($slot); ?></span>
    </span>
</span>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/pretty-limit.blade.php ENDPATH**/ ?>