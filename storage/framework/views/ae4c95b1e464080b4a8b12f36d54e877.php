<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'files' => [],
    'download' => true,
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
    'files' => [],
    'download' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php if($files !== []): ?>
    <div <?php echo e($attributes->class(['dropzone'])); ?>>
        <div class="dropzone-items">
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    <?php echo e($file['attributes']?->class(['dropzone-item dropzone-item-file'])); ?>

                >
                    <?php if (isset($component)) { $__componentOriginalb1eae7571f7b9beea214c968152e1d84 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1eae7571f7b9beea214c968152e1d84 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.file','data' => ['value' => $file['full_path'],'filename' => $file['name'],'download' => $download]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($file['full_path']),'filename' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($file['name']),'download' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($download)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1eae7571f7b9beea214c968152e1d84)): ?>
<?php $attributes = $__attributesOriginalb1eae7571f7b9beea214c968152e1d84; ?>
<?php unset($__attributesOriginalb1eae7571f7b9beea214c968152e1d84); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1eae7571f7b9beea214c968152e1d84)): ?>
<?php $component = $__componentOriginalb1eae7571f7b9beea214c968152e1d84; ?>
<?php unset($__componentOriginalb1eae7571f7b9beea214c968152e1d84); ?>
<?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/files.blade.php ENDPATH**/ ?>