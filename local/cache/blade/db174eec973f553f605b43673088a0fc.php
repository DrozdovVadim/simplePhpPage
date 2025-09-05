<div class="<?php echo e($block); ?>">
    <label class="<?php echo e($block->elem('label')); ?>" for=""><?php echo e($item['text']); ?></label>
    <textarea
    class="<?php echo e($block->elem('textarea')); ?>"
    id="<?php echo e($item['id'] ?? ''); ?>"
    value="<?php echo e($item['value'] ?? ''); ?>"
    name="<?php echo e($item['name'] ?? ''); ?>"
    data-name="<?php echo e($item['data'] ?? ''); ?>"
    <?php echo e($item['required'] ?? ''); ?>

    onclick="<?php echo e($item['onclick'] ?? ''); ?>"

    ></textarea>
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-textarea/forms-textarea.blade.php ENDPATH**/ ?>