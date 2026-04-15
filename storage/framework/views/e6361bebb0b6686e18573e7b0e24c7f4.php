<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'tabs' => [],
    'active' => null,
    'justifyAlign' => 'start',
    'isVertical' => false,
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
    'tabs' => [],
    'active' => null,
    'justifyAlign' => 'start',
    'isVertical' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php if($tabs !== []): ?>
    <!-- Tabs -->
    <div <?php echo e($attributes->class(['tabs'])); ?>

        x-data="tabs(
            '<?php echo e($active ?? array_key_first($tabs)); ?>',
            <?php echo e($isVertical ? 'true' : 'false'); ?>

        )"
    >
        <!-- Tabs Buttons -->
        <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['tabs-list', 'justify-' . $justifyAlign]); ?>">
            <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="tabs-item">
                    <button <?php echo $tab['labelAttributes']; ?>

                            type="button"
                    >
                        <?php echo $tab['icon']; ?>

                        <?php echo $tab['label']; ?>

                    </button>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <!-- END: Tabs Buttons -->

        <!-- Tabs content -->
        <div class="tabs-content">
            <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div <?php echo $tab['attributes']; ?>>
                    <div class="tabs-body space-elements">
                        <?php echo $tab['content']; ?>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- END: Tabs content -->
    </div>
    <!-- END: Tabs -->
<?php endif; ?>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/tabs.blade.php ENDPATH**/ ?>