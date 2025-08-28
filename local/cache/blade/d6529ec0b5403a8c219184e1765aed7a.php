<section class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <?php echo $renderer->renderBlock(
            'main/main-title',
            ['titleText' => $APPLICATION->GetTitle(),]
            ); ?>

        <div class="<?php echo e($block->elem('wrapper')); ?>">
            <?php $__currentLoopData = $arResult['ITEMS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $renderer->renderBlock(
                    'main/main-news-item',
                    ['arItem' => $arItem,]
                    ); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
                <?php if($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	        <br /><?php echo $arResult["NAV_STRING"]; ?>

            <?php endif; ?>
</section><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/main/main-news-list/main-news-list.blade.php ENDPATH**/ ?>