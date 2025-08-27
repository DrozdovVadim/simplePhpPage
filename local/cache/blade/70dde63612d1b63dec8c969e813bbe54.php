<section class="swiper <?php echo e($block); ?>">
    <div class="swiper-wrapper <?php echo e($block->elem('wrapper')); ?>">
        <?php $__currentLoopData = $arResult['ITEMS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <a href="/news/<?php echo e($arItem['CODE']); ?>" class="swiper-slide <?php echo e($block->elem('slide')); ?>">
                <img class="<?php echo e($block->elem('img')); ?>" src="<?php echo e($arItem['PREVIEW_PICTURE']['SRC']); ?>" alt="<?php echo e($arItem['PREVIEW_PICTURE']['ALT']); ?>">
                <div class="<?php echo e($block->elem('text')); ?>">
                    <h2 class="<?php echo e($block->elem('title')); ?>"><?php echo e($arItem['NAME']); ?></h2>
                    <?php echo $arItem['PREVIEW_TEXT']; ?>

                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/main/main-news-banner/main-news-banner.blade.php ENDPATH**/ ?>