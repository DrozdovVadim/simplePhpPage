
<div class="<?php echo e($block); ?>">
    <?php if(!empty($item['labelText'])): ?>
    <label class="<?php echo e($block->elem('label')); ?>" for=""><?php echo e($item['labelText']); ?></label>
<?php endif; ?>
<input class="<?php echo e($block->elem('input')); ?>" type="<?php echo e($item['type']); ?>" placeholder="<?php echo e($input['placeholder']); ?>" data-name="<?php echo e($item['data']); ?>" name="<?php echo e($item['name']); ?>" <?php echo e($item['required'] ? 'required' : ''); ?> >
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-input-text/forms-input-text.blade.php ENDPATH**/ ?>