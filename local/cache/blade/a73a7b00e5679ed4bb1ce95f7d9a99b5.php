<div class="<?php echo e($block); ?>">
    <input
    class="<?php echo e($block->elem('input')); ?>"
    id="<?php echo e($item['id'] ?? ''); ?>"
    value="<?php echo e($item['value'] ?? ''); ?>"
    name="<?php echo e($item['name'] ?? ''); ?>"
    data-name="<?php echo e($item['data'] ?? ''); ?>"
    <?php echo e($item['required'] ?? ''); ?>

    onclick="<?php echo e($item['onclick'] ?? ''); ?>"
    type="<?php echo e($item['type'] ?? ''); ?>"
    > <label class="<?php echo e($block->elem('label')); ?>" for=""><?php echo e($item['NAME']); ?></label>
</div>
<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-input-radiobutton/forms-input-radiobutton.blade.php ENDPATH**/ ?>