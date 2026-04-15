<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'components' => [],
    'translates' => [],
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
    'components' => [],
    'translates' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<div <?php echo e($attributes->merge(['class' => 'layout-bottom-bar'])); ?>

    x-data="bottomBarMenu"
>
    <div class="layout-bottom-bar-content">
        <button
            type="button"
            class="layout-bottom-bar-back"
            x-show="showBackButton"
            @click="navigateBack()"
            x-cloak
        >
            <?php if (isset($component)) { $__componentOriginale5a015c7e462e0b96985c262dddd7f9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5a015c7e462e0b96985c262dddd7f9d = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Icon::resolve(['icon' => 'chevron-left'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
            <span class="layout-bottom-bar-back-text"><?php echo e($translates['back'] ?? 'Back'); ?></span>
        </button>

        <div class="layout-bottom-bar-items">
            <template x-for="(item, index) in currentItems" :key="index">
                <a
                    :href="item.url"
                    class="layout-bottom-bar-item"
                    @click.prevent="handleItemClick(item)"
                    :class="{ '_is-active': item.isActive }"
                >
                    <div class="layout-bottom-bar-item-icon" x-html="item.icon"></div>
                    <div class="layout-bottom-bar-item-text" x-text="item.text"></div>
                    <div class="layout-bottom-bar-item-badge" x-show="item.badge" x-text="item.badge" x-cloak></div>
                </a>
            </template>
        </div>
    </div>

    <div style="display: none;" data-bottom-menu-source>
        <?php if (isset($component)) { $__componentOriginal19b4fc714625cdcf69d1dc3ea40c6055 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19b4fc714625cdcf69d1dc3ea40c6055 = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Components::resolve(['components' => $components] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::components'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Components::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19b4fc714625cdcf69d1dc3ea40c6055)): ?>
<?php $attributes = $__attributesOriginal19b4fc714625cdcf69d1dc3ea40c6055; ?>
<?php unset($__attributesOriginal19b4fc714625cdcf69d1dc3ea40c6055); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19b4fc714625cdcf69d1dc3ea40c6055)): ?>
<?php $component = $__componentOriginal19b4fc714625cdcf69d1dc3ea40c6055; ?>
<?php unset($__componentOriginal19b4fc714625cdcf69d1dc3ea40c6055); ?>
<?php endif; ?>
        <?php echo e($slot ?? ''); ?>

    </div>
</div>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/layout/bottom-bar.blade.php ENDPATH**/ ?>