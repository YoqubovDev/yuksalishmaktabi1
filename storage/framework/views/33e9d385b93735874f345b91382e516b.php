<input <?php echo e($attributes->merge([
    'class' => !in_array($attributes->get('type'), ['checkbox', 'radio', 'color', 'range'])
        ? 'form-input'
        : 'form-' . $attributes->get('type', 'input'),
    'type' => 'text'])); ?>

/>
<?php /**PATH /home/shehroz/Projects/example-app/vendor/moonshine/moonshine/src/Laravel/src/Providers/../../../UI/resources/views/components/form/input.blade.php ENDPATH**/ ?>