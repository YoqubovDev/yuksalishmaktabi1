<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => 'default',
    'async' => false,
    'asyncUrl' => '',
    'wide' => $isWide ?? false,
    'full' => $isFull ?? false,
    'open' => $isOpen ?? false,
    'auto' => $isAuto ?? false,
    'autoClose' => $isAutoClose ?? false,
    'closeOutside' => $isCloseOutside ?? true,
    'title' => '',
    'subtitle' => null,
    'outerHtml' => null
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
    'name' => 'default',
    'async' => false,
    'asyncUrl' => '',
    'wide' => $isWide ?? false,
    'full' => $isFull ?? false,
    'open' => $isOpen ?? false,
    'auto' => $isAuto ?? false,
    'autoClose' => $isAutoClose ?? false,
    'closeOutside' => $isCloseOutside ?? true,
    'title' => '',
    'subtitle' => null,
    'outerHtml' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div x-data="modal(
    `<?php echo e($open); ?>`,
    `<?php echo e($async ? str_replace('&amp;', '&', $asyncUrl) : ''); ?>`,
    `<?php echo e($autoClose); ?>`
)"
    <?php echo e($attributes); ?>

>
    <template x-teleport="body">
        <div
            class="modal-template"
            <?php echo MoonShine\Support\AlpineJs::eventBlade('modal_toggled', $name, 'toggleModal($event)'); ?>
        >
            <div
                x-show="open"
                x-transition:enter="transition ease-out duration-250"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                aria-modal="true"
                role="dialog"
                <?php echo e($attributes->merge(['class' => 'modal'])); ?>

                <?php if($closeOutside): ?> @click.self="toggleModal" <?php endif; ?>
            >
                <div
                    class="modal-dialog
                    <?php if($wide): ?> modal-dialog-xl <?php elseif($full): ?> w-full max-w-none <?php elseif($auto): ?> modal-dialog-auto <?php endif; ?>"
                >
                    <div class="modal-content">
                        <div class="modal-header">
                            <div>
                                <h5 class="modal-title"><?php echo e($title ?? ''); ?></h5>
                                <?php if(!is_null($subtitle)): ?>
                                    <p class="modal-subtitle"><?php echo e($subtitle); ?></p>
                                <?php endif; ?>
                            </div>
                            <button
                                type="button"
                                class="modal-close btn-fit"
                                @click.stop="toggleModal"
                                aria-label="Close"
                            >
                                <?php if (isset($component)) { $__componentOriginale5a015c7e462e0b96985c262dddd7f9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Icon::resolve(['icon' => 'x-mark'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale5a015c7e462e0b96985c262dddd7f9d)): ?>
<?php $attributes = $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d; ?>
<?php unset($__attributesOriginale5a015c7e462e0b96985c262dddd7f9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale5a015c7e462e0b96985c262dddd7f9d)): ?>
<?php $component = $__componentOriginale5a015c7e462e0b96985c262dddd7f9d; ?>
<?php unset($__componentOriginale5a015c7e462e0b96985c262dddd7f9d); ?>
<?php endif; ?>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php if($async): ?>
                                <div :id="id">
                                    <?php if (isset($component)) { $__componentOriginalfafd141889f3559e22f375cbbe7394f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfafd141889f3559e22f375cbbe7394f5 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Loader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Loader::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfafd141889f3559e22f375cbbe7394f5)): ?>
<?php $attributes = $__attributesOriginalfafd141889f3559e22f375cbbe7394f5; ?>
<?php unset($__attributesOriginalfafd141889f3559e22f375cbbe7394f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfafd141889f3559e22f375cbbe7394f5)): ?>
<?php $component = $__componentOriginalfafd141889f3559e22f375cbbe7394f5; ?>
<?php unset($__componentOriginalfafd141889f3559e22f375cbbe7394f5); ?>
<?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php echo e($slot ?? ''); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div x-show="open" x-transition.opacity class="modal-backdrop"></div>
        </div>
    </template>

    <?php if($outerHtml?->isNotEmpty()): ?>
        <div <?php echo e($outerHtml->attributes); ?>>
            <?php echo e($outerHtml ?? ''); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/modal.blade.php ENDPATH**/ ?>