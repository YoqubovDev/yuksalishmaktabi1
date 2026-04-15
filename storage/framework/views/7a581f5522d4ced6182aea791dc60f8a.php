<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'value' => [],
    'fromColumn' => 'range_from',
    'toColumn' => 'range_to',
    'fromValue' => '',
    'toValue' => '',
    'fromAttributes' => null,
    'toAttributes' => null,
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
    'value' => [],
    'fromColumn' => 'range_from',
    'toColumn' => 'range_to',
    'fromValue' => '',
    'toValue' => '',
    'fromAttributes' => null,
    'toAttributes' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php if (isset($component)) { $__componentOriginal7340d179764a28b1c85f803337bb70a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7340d179764a28b1c85f803337bb70a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.slide-range','data' => ['attributes' => $attributes,'fromAttributes' => $fromAttributes,'toAttributes' => $toAttributes,'fromValue' => $fromValue,'toValue' => $toValue,'fromName' => ''.e($fromColumn).'','toName' => ''.e($toColumn).'','fromField' => ''.e($column).'.'.e($fromField).'','toField' => ''.e($column).'.'.e($toField).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.slide-range'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes),'fromAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fromAttributes),'toAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toAttributes),'fromValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fromValue),'toValue' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toValue),'fromName' => ''.e($fromColumn).'','toName' => ''.e($toColumn).'','fromField' => ''.e($column).'.'.e($fromField).'','toField' => ''.e($column).'.'.e($toField).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7340d179764a28b1c85f803337bb70a1)): ?>
<?php $attributes = $__attributesOriginal7340d179764a28b1c85f803337bb70a1; ?>
<?php unset($__attributesOriginal7340d179764a28b1c85f803337bb70a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7340d179764a28b1c85f803337bb70a1)): ?>
<?php $component = $__componentOriginal7340d179764a28b1c85f803337bb70a1; ?>
<?php unset($__componentOriginal7340d179764a28b1c85f803337bb70a1); ?>
<?php endif; ?>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/fields/slide.blade.php ENDPATH**/ ?>