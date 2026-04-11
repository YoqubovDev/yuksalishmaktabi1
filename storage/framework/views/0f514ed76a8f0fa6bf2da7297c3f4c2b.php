<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'extensions' => null,
    'extensionsAttributes' => null,
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
    'extensions' => null,
    'extensionsAttributes' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $prefixClass = \MoonShine\UI\InputExtensions\InputPrefix::class;
    $prefixes = collect($extensions)->filter(fn($e) => $e instanceof $prefixClass);
    $others   = collect($extensions)->reject(fn($e) => $e instanceof $prefixClass);
?>

<?php if($prefixes->isNotEmpty() || $others->isNotEmpty()): ?>
    <div <?php echo e($attributes
            ->class(['form-group-expansion--has-prefix' => $prefixes->isNotEmpty()])
            ->class(['form-group-expansion--has-suffix' => $others->isNotEmpty()])
            ->merge(['class' => 'form-group-expansion'])
            ->merge($extensionsAttributes?->toArray() ?? [])); ?>>

        <?php echo e($slot ?? ''); ?>


        
        <?php if($prefixes->isNotEmpty()): ?>
            <div class="expansion-wrapper expansion-wrapper--prefix">
                <?php $__currentLoopData = $prefixes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $extension; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        
        <?php if($others->isNotEmpty()): ?>
            <div class="expansion-wrapper expansion-wrapper--suffix">
                <?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $extension; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php else: ?>
    <?php echo e($slot ?? ''); ?>

<?php endif; ?>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/Laravel/src/Providers/../../../UI/resources/views/components/form/input-extensions.blade.php ENDPATH**/ ?>