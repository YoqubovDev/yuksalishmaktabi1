<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'src',
    'alt' => null,
    'width' => null,
    'height' => null,
    'srcset' => null,
    'loading' => null, // eager, lazy
    'decoding' => null, // auto, async, sync
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
    'src',
    'alt' => null,
    'width' => null,
    'height' => null,
    'srcset' => null,
    'loading' => null, // eager, lazy
    'decoding' => null, // auto, async, sync
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<img <?php echo e($attributes->merge([
    'src' => $src,
    'alt' => $alt,
    'width' => $width,
    'height' => $height,
    'loadimg' => $loading,
    'decoding' => $decoding,
    'srcset' => $srcset
])); ?>>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/img.blade.php ENDPATH**/ ?>