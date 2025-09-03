
<div>
    <?php if(!empty($item['labelText'])): ?>
    <label for=""><?php echo e($item['labelText']); ?></label>
<?php endif; ?>
<input type="<?php echo e($item['type']); ?>" placeholder="<?php echo e($input['placeholder']); ?>" name="<?php echo e($item['name']); ?>" <?php echo e($input['required'] ? 'required' : ''); ?>>
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-input-text/forms-input-text.blade.php ENDPATH**/ ?>