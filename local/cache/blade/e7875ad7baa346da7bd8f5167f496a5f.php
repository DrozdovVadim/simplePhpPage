<?php $__currentLoopData = $arResult['ITEMS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e($item['DETAIL_PAGE_URL']); ?>">
        <img src="<?php echo $item['PREVIEW_PICTURE']['SRC']; ?>" alt="<?php echo e($item['ALT']); ?>">
        <p><?php echo e($item['PREVIEW_TEXT']); ?></p>
        <p><?php echo $item['DISPLAY_PROPERTIES']['AUTHOR']['DISPLAY_VALUE']; ?></p>
        <div>
            <?php $__currentLoopData = $item['PROPERTIES']['ZHANR']['VALUE_ENUM']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zhanr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span><?php echo e($zhanr); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <p><?php echo e($item['PROPERTIES']['PEREPLET']['VALUE_ENUM']); ?></p>
    </a><br><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/books/books-catalog-list/books-catalog-list.blade.php ENDPATH**/ ?>