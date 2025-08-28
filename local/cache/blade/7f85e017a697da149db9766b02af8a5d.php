<a class="<?php echo e($block); ?>" href="/news/<?php echo e($arItem['CODE']); ?>">
        <div class="<?php echo e($block->elem('date')); ?>"><?php echo e($arItem['PROPERTIES']['CREATION_DATE']['VALUE']); ?> <?php echo e($arItem['PROPERTIES']['IS_LOGIN']['VALUE'] ? "Для авторизованных" : "Для всех"); ?></div>
        <h2 class="<?php echo e($block->elem('title')); ?>"><?php echo e($arItem['NAME']); ?></h2>
        <?php echo $arItem['PREVIEW_TEXT']; ?>

        <?php echo $renderer->renderBlock(
            'main/main-news-button',
            ['text' => 'Подробнее']
            ); ?>

        
	</a><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/main/main-news-item/main-news-item.blade.php ENDPATH**/ ?>