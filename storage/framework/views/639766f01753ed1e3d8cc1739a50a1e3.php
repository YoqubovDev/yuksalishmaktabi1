<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'url' => 'javascript:void(0);',
    'title' => '',
    'subtitle' => '',
    'thumbnail' => '',
    'overlay' => false,
    'values' => [],
    'header' => null,
    'actions' => null,
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
    'url' => 'javascript:void(0);',
    'title' => '',
    'subtitle' => '',
    'thumbnail' => '',
    'overlay' => false,
    'values' => [],
    'header' => null,
    'actions' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<!-- Card -->
<div <?php echo e($attributes->class(['card', 'card-category'])); ?>>
    <?php if($thumbnail): ?>
        <div class="card-photo">
            <?php if($overlay): ?>
                <?php echo e($header ?? ''); ?>


                <div class="card-photo-content">
                    <h3 class="title"><a href="<?php echo e($url); ?>"><?php echo e($title); ?></a></h3>

                    <?php if($subtitle): ?>
                        <div class="subcategory">
                            <?php echo e($subtitle); ?>

                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if(is_array($thumbnail)): ?>
                <?php if (isset($component)) { $__componentOriginal39733cb55cfd4808b49159d8a8c6394f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39733cb55cfd4808b49159d8a8c6394f = $attributes; } ?>
<?php $component = MoonShine\UI\Components\Carousel::resolve(['items' => $thumbnail,'alt' => $title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\UI\Components\Carousel::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39733cb55cfd4808b49159d8a8c6394f)): ?>
<?php $attributes = $__attributesOriginal39733cb55cfd4808b49159d8a8c6394f; ?>
<?php unset($__attributesOriginal39733cb55cfd4808b49159d8a8c6394f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39733cb55cfd4808b49159d8a8c6394f)): ?>
<?php $component = $__componentOriginal39733cb55cfd4808b49159d8a8c6394f; ?>
<?php unset($__componentOriginal39733cb55cfd4808b49159d8a8c6394f); ?>
<?php endif; ?>
            <?php else: ?>
                <img src="<?php echo e($thumbnail); ?>" alt="<?php echo e($title); ?>" />
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="card-body">
        <?php if(!$overlay && $title): ?>
            <?php echo e($header ?? ''); ?>


            <h3 class="title"><a href="<?php echo e($url); ?>"><?php echo e($title); ?></a></h3>

            <?php if($subtitle): ?>
                <div class="subcategory">
                    <?php echo e($subtitle); ?>

                </div>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($values): ?>
            <table>
            <tbody>
                <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th width="40%"><?php echo e($label); ?>:</th>
                        <td width="60%"><?php echo $value; ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
        <?php endif; ?>

            <?php echo e($slot ?? ''); ?>

    </div>

    <?php if($actions?->isNotEmpty()): ?>
        <div <?php echo e($actions->attributes->class(['card-actions'])); ?>>
            <?php echo e($actions); ?>

        </div>
    <?php endif; ?>
</div>
<!-- END: Card -->
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/UI/resources/views/components/card.blade.php ENDPATH**/ ?>