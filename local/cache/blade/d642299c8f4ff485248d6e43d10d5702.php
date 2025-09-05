<div class="<?php echo e($block); ?>">

    <!-- <div id="feedback-message" class="<?php echo e($block->elem('message-hidden')); ?>"></div> -->
    <form
    id="<?php echo e($formId ?? ''); ?>"
    name = "<?php echo e($name ?? ''); ?>"
    class="<?php echo e($block->elem('form')); ?>"
    action="<?php echo e($formAction ?? ''); ?>"
    method="<?php echo e($method ?? ''); ?>">
        <?php if(!empty($hiddenFields)): ?>
        <?php $__currentLoopData = $hiddenFields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="<?php echo e($i['name']); ?>" id="<?php echo e($i['id']); ?>" value="<?php echo e($i['value']); ?>" />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php echo bitrix_sessid_post(); ?>

        <?php $__currentLoopData = $arResult['formItems']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $item; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- <input type="hidden" name="PARAMS_HASH" value="<?php echo e($arResult["PARAMS_HASH"]); ?>">     -->
    </form>
</div>


<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-form/forms-form.blade.php ENDPATH**/ ?>