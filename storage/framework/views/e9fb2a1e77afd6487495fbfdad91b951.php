<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'radial' => false,
    'value' => 0,
    'color' => '',
    'size' => 'md'
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
    'radial' => false,
    'value' => 0,
    'color' => '',
    'size' => 'md'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php if($radial): ?>
    <div <?php echo e($attributes->class(['radial-progress', "radial-progress--$color" => $color, "radial-progress-$size" => $size])); ?>

         style="--value: <?php echo e($value); ?>"
    >
        <span class="radial-progress-label"><?php echo e($slot ?? $value . '%'); ?></span>
    </div>
<?php else: ?>
    <div <?php echo e($attributes->class(['progress'])); ?>>
        <div class="progress-bar <?php echo e($color ? "progress-bar--$color" : ''); ?>"
             role="progressbar"
             style="width: <?php echo e($value); ?>%"
        ><?php echo e($slot ?? $value . '%'); ?></div>
    </div>
<?php endif; ?>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/progress-bar.blade.php ENDPATH**/ ?>