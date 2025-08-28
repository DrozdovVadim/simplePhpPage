<div class="news__categories">
    Темы: 
    <?php if(!empty($arResult['NEWS_CATEGORIES'])): ?>                
        <?php $__currentLoopData = $arResult['NEWS_CATEGORIES']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/news/category/<?= $category["CODE"]?>"><?= $category['NAME'] ?></a><?= ($category !== end($arResult['NEWS_CATEGORIES'])) ? ', ' : '.' ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/main/main-categories/main-categories.blade.php ENDPATH**/ ?>