<div class="<?php echo e($block); ?>">
    <input
    class="<?php echo e($block->elem('input')); ?>"
    type="submit"
    id="<?php echo e($item['id'] ?? ''); ?>"
    value="<?php echo e($item['value'] ?? ''); ?>"
    name="<?php echo e($item['name'] ?? ''); ?>"
    data-name="<?php echo e($item['data'] ?? ''); ?>"
    <?php echo e($item['required'] ?? ''); ?>

    onclick="<?php echo e($item['onclick'] ?? ''); ?>"
    >
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-input-button/forms-input-button.blade.php ENDPATH**/ ?>