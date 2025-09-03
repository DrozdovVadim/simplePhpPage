<div class="<?php echo e($block); ?>">

<div class="mfeedback container">
<?php if(!empty($arResult["ERROR_MESSAGE"])): ?>
	<?php $__currentLoopData = $arResult["ERROR_MESSAGE"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		ShowError($v);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(!empty($arResult["OK_MESSAGE"])): ?>
	<div class="mf-ok-text"><?php echo e($arResult["OK_MESSAGE"]); ?></div>
<?php endif; ?>
</div>
<form id='main-form' class="<?php echo e($block->elem('form')); ?>" action="<?php echo e($formAction); ?>" method="POST">
<?php echo bitrix_sessid_post(); ?>

        <!-- <?php if(!empty($formItems['inputs'])): ?>
            <?php if(!empty($formItems['titles']['inputTitle'])): ?>
                <div class="<?php echo e($block->elem('chechbox-title')); ?>">
                    <?php echo e($formItems['titles']['inputTitle']); ?>

                </div>
            <?php endif; ?>
            <div class="<?php echo e($block->elem('inputs-wrapper')); ?>">
                <?php $__currentLoopData = $formItems['inputs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $template = $input['template']; ?>
                <?php echo $renderer->renderBlock(
                    "forms/forms-".$template,
                    ['item' => $input]
                    ); ?>

                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <?php if(!empty($formItems['radiobuttons'])): ?>
            <?php if(!empty($formItems['titles']['checkboxTitle'])): ?>
                <div class="<?php echo e($block->elem('chechbox-title')); ?>">
                    <?php echo e($formItems['titles']['checkboxTitle']); ?>

                </div>
            <?php endif; ?>
            <div class="<?php echo e($block->elem('checkboxes-wrapper')); ?>">
                <?php $__currentLoopData = $formItems['radiobuttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $radiobutton): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $template = $radiobutton['template']; ?>
                    <?php echo $renderer->renderBlock(
                        "forms/forms-".$template,
                        ['item' => $radiobutton]
                    ); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        
        <div>
            <?php if(!empty($formItems['textarea'])): ?>
                <?php $__currentLoopData = $formItems['textarea']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $textarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $template = $textarea['template']; ?>
                    <?php echo $renderer->renderBlock(
                            'forms/forms-'.$template,
                            [
                            'item' => $textarea,
                            ]
                            ); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        
        <div>
            <?php if(!empty($formItems['check'])): ?>
                <?php $__currentLoopData = $formItems['check']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $check): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $template = $check['template'];?>
                    <?php echo $renderer->renderBlock(
                            "forms/forms-".$template,
                            ['item' => $check]
                        ); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        

        <?php if(!empty($formItems['sendButton'])): ?>
            <?php echo $renderer->renderBlock(
                "forms/forms-input-button",
                ['item' => $formItems['sendButton'],]
            ); ?>

        <?php endif; ?> -->
        <?php $__currentLoopData = $arResult['formItems']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <?php echo $item; ?>

        </div>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                
    </form>
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/forms/forms-form/forms-form.blade.php ENDPATH**/ ?>