

<nav class="<?php echo e($block); ?>">
    <ul class="<?php echo e($block->elem('list')); ?>">
        <?php $previousLevel = 0 ?>
        <?php $__currentLoopData = $arResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($previousLevel && $arItem['DEPTH_LEVEL'] < $previousLevel): ?>
                <?php print(str_repeat("</ul></li>", ($previousLevel - $arItem['DEPTH_LEVEL']))) ?>
            <?php endif; ?>
            <?php if($arItem['IS_PARENT']): ?>
                <?php if($arItem['DEPTH_LEVEL'] == 1): ?>
                    <li class="<?php echo e($block->elem('list-item')); ?>"><a href="<?php echo e($arItem['LINK']); ?>" class="<?php echo e($block->elem('item-text')); ?> <?php if($arItem['SELECTED']): ?> <?php echo e($block->elem('root-selected')); ?> <?php else: ?> <?php echo e($block->elem('root-item')); ?> <?php endif; ?>"><?php echo e($arItem['TEXT']); ?></a>
                    <ul class="<?php echo e($block->elem('child-list')); ?>">
                <?php else: ?>
                    <li <?php if($arItem['SELECTED']): ?> class="<?php echo e($block->elem('item-selected')); ?>" <?php endif; ?>><a href="<?php echo e($arItem['LINK']); ?>" class="parent"><?php echo e($arItem['TEXT']); ?></a>
                        <ul>
                <?php endif; ?>
            <?php else: ?> 
                <?php if($arItem['PERMISSION'] > 'D'): ?>
                    <?php if($arItem['DEPTH_LEVEL'] == 1): ?>
                        <li><a href="<?php echo e($arItem['LINK']); ?>" class="<?php if($arItem['SELECTED']): ?> <?php echo e($block->elem('root-selected')); ?> <?php else: ?> <?php echo e($block->elem('root-item')); ?> <?php endif; ?>"><?php echo e($arItem['TEXT']); ?></a></li>
                    <?php else: ?>
                        <li <?php if($arItem['SELECTED']): ?> class="item-selected" <?php endif; ?>><a href="<?php echo e($arItem['LINK']); ?>"><?php echo e($arItem['TEXT']); ?></a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($arItem['DEPTH_LEVEL'] == 1): ?>
                        <li><a href="" class="<?php if($arItem['SELECTED']): ?> <?php echo e($block->elem('root-selected')); ?> <?php else: ?> <?php echo e($block->elem('root-item')); ?> <?php endif; ?>" title="<?php GetMessage('MENU_ITEM_ACCESS_DENIED') ?>"><?php echo e($arItem['TEXT']); ?></a></li>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php $previousLevel = $arItem['DEPTH_LEVEL'] ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo $auth; ?>    
    </ul>
</nav><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/common/navigation-menu/navigation-menu.blade.php ENDPATH**/ ?>