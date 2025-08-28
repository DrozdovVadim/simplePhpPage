
<section class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('container')); ?>">
        <?php if(empty($arResult)): ?>
            ''
        <?php else: ?>
            <?php for($i = 0; $i < count($arResult); $i++): ?>
                <?php if($i == count($arResult)-1): ?>
                    <span class="<?php echo e($block->elem('span')); ?>"><?php echo e($arResult[$i]['TITLE']); ?></span>
                <?php else: ?>
                    <a class="<?php echo e($block->elem('link')); ?>" href="<?php echo e($arResult[$i]['LINK']); ?>"><?php echo e($arResult[$i]['TITLE']); ?></a>
                    <span class="<?php echo e($block->elem('stick')); ?>">/</span>
                <?php endif; ?>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
</section>
<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/main/main-breadcrumbs/main-breadcrumbs.blade.php ENDPATH**/ ?>