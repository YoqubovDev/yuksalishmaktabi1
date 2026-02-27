<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'toggleMethod' => 'toggleSidebar',
    'toggleState' => 'isSidebarOpen',
    'sidebar' => false,
    'topbar' => false,
    'mobileBar' => false,
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
    'toggleMethod' => 'toggleSidebar',
    'toggleState' => 'isSidebarOpen',
    'sidebar' => false,
    'topbar' => false,
    'mobileBar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<button
    type="button"
    <?php echo e($attributes->merge([
        'class'          => 'btn-burger btn-fit',
        '@click.prevent' => '$store.menu.' . $toggleMethod . '()',
    ])); ?>

>
    <svg x-show="!$store.menu.<?php echo e($toggleState); ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
    <svg x-cloak x-show="$store.menu.<?php echo e($toggleState); ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
</button>
<?php /**PATH /home/shehroz/example-app/vendor/moonshine/moonshine/src/Laravel/src/Providers/../../../UI/resources/views/components/layout/burger.blade.php ENDPATH**/ ?>