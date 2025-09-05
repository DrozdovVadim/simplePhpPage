<div class="<?php echo e($block); ?>">
    <?php $__currentLoopData = $formItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="<?php echo e($block->elem('input-wrapper')); ?>">
        <input class="<?php echo e($block->elem('input')); ?>"
        type="checkbox"
        id="<?php echo e($item['id'] ?? ''); ?>"
        value="<?php echo e($item['value'] ?? ''); ?>"
        name="<?php echo e($item['name'] ?? ''); ?>"
        data-name="<?php echo e($item['data'] ?? ''); ?>"
        <?php echo e($item['required'] ?? ''); ?>

        onclick="<?php echo e($item['onclick'] ?? ''); ?>"
        <?php echo e($item['checked'] ? 'checked' : ''); ?>

        <?php echo e($item['disabled'] ? 'disabled' : ''); ?>

        > <label for=""><?php echo e($item['text']); ?></label>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-input-checkbox/forms-input-checkbox.blade.php ENDPATH**/ ?>