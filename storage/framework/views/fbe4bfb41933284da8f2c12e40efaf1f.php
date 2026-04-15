<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => '',
    'fields' => [],
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
    'fields' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php if (isset($component)) { $__componentOriginal5089b181d505bdaf856be7dc815d9d92 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5089b181d505bdaf856be7dc815d9d92 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.fieldset','data' => ['label' => $label,'attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
    <div class="space-elements">
        <?php if (isset($component)) { $__componentOriginald06328ac35b55b584ab4551d5f6b335b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald06328ac35b55b584ab4551d5f6b335b = $attributes; } ?>
<?php $component = MoonShine\UI\Components\FieldsGroup::resolve(['components' => $fields] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::fields-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\FieldsGroup::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald06328ac35b55b584ab4551d5f6b335b)): ?>
<?php $attributes = $__attributesOriginald06328ac35b55b584ab4551d5f6b335b; ?>
<?php unset($__attributesOriginald06328ac35b55b584ab4551d5f6b335b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald06328ac35b55b584ab4551d5f6b335b)): ?>
<?php $component = $__componentOriginald06328ac35b55b584ab4551d5f6b335b; ?>
<?php unset($__componentOriginald06328ac35b55b584ab4551d5f6b335b); ?>
<?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5089b181d505bdaf856be7dc815d9d92)): ?>
<?php $attributes = $__attributesOriginal5089b181d505bdaf856be7dc815d9d92; ?>
<?php unset($__attributesOriginal5089b181d505bdaf856be7dc815d9d92); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5089b181d505bdaf856be7dc815d9d92)): ?>
<?php $component = $__componentOriginal5089b181d505bdaf856be7dc815d9d92; ?>
<?php unset($__componentOriginal5089b181d505bdaf856be7dc815d9d92); ?>
<?php endif; ?>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/fields/fieldset.blade.php ENDPATH**/ ?>