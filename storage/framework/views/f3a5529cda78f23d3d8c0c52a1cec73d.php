<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'min' => 0,
    'max' => 1000000,
    'fromAttributes' => $attributes,
    'toAttributes' => $attributes,
    'fromName',
    'toName',
    'fromValue',
    'toValue',
    'fromField' => $fromName,
    'toField' => $toName
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
    'min' => 0,
    'max' => 1000000,
    'fromAttributes' => $attributes,
    'toAttributes' => $attributes,
    'fromName',
    'toName',
    'fromValue',
    'toValue',
    'fromField' => $fromName,
    'toField' => $toName
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div <?php echo e($attributes->class(['form-group-range'])->only('class')); ?>>
    <div x-data="range(<?php echo e('`'.($fromValue ?? $min).'`,`'.($toValue ?? $max).'`'); ?>)"
         x-init="mintrigger(); maxtrigger()"
         data-min="<?php echo e($attributes->get('min', $min)); ?>"
         data-max="<?php echo e($attributes->get('max', $max)); ?>"
         data-step="<?php echo e($attributes->get('step', 1)); ?>"
    >
        <div class="form-group-range-wrapper">
            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'range','step' => ''.e($attributes->get('step', 1)).'','xBind:min' => 'min','xBind:max' => 'max','xOn:input' => 'mintrigger','xModel' => 'minValue','disabled' => $attributes->get('readonly'),'attributes' => $fromAttributes->except(['type'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'range','step' => ''.e($attributes->get('step', 1)).'','x-bind:min' => 'min','x-bind:max' => 'max','x-on:input' => 'mintrigger','x-model' => 'minValue','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->get('readonly')),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fromAttributes->except(['type']))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'range','step' => ''.e($attributes->get('step', 1)).'','xBind:min' => 'min','xBind:max' => 'max','xOn:input' => 'maxtrigger','xModel' => 'maxValue','disabled' => $attributes->get('readonly'),'attributes' => $toAttributes->except(['type'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'range','step' => ''.e($attributes->get('step', 1)).'','x-bind:min' => 'min','x-bind:max' => 'max','x-on:input' => 'maxtrigger','x-model' => 'maxValue','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->get('readonly')),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toAttributes->except(['type']))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>


            <div class="form-range-slider">
                <div class="form-range-tracker"></div>
                <div class="form-range-connect" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>
            </div>
        </div>

        <div class="form-group-range-fields">
            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'number','maxlength' => '5','step' => ''.e($attributes->get('step', 1)).'','xBind:min' => 'min','xBind:max' => 'max','xOn:input' => 'mintrigger','xModel' => 'minValue','attributes' => $fromAttributes->merge([
                    'name' => $fromName,
                ]),'value' => ''.e($fromValue).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','maxlength' => '5','step' => ''.e($attributes->get('step', 1)).'','x-bind:min' => 'min','x-bind:max' => 'max','x-on:input' => 'mintrigger','x-model' => 'minValue','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fromAttributes->merge([
                    'name' => $fromName,
                ])),'value' => ''.e($fromValue).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal14a9cb58f632607a286ccbee397ec70f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14a9cb58f632607a286ccbee397ec70f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'moonshine::components.form.input','data' => ['type' => 'number','step' => ''.e($attributes->get('step', 1)).'','maxlength' => '5','xBind:min' => 'min','xBind:max' => 'max','xOn:input' => 'maxtrigger','xModel' => 'maxValue','attributes' => $toAttributes->merge([
                    'name' => $toName,
                ]),'value' => ''.e($toValue).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','step' => ''.e($attributes->get('step', 1)).'','maxlength' => '5','x-bind:min' => 'min','x-bind:max' => 'max','x-on:input' => 'maxtrigger','x-model' => 'maxValue','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($toAttributes->merge([
                    'name' => $toName,
                ])),'value' => ''.e($toValue).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $attributes = $__attributesOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__attributesOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14a9cb58f632607a286ccbee397ec70f)): ?>
<?php $component = $__componentOriginal14a9cb58f632607a286ccbee397ec70f; ?>
<?php unset($__componentOriginal14a9cb58f632607a286ccbee397ec70f); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/form/slide-range.blade.php ENDPATH**/ ?>