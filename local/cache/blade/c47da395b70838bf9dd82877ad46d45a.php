<?php if($USER->IsAuthorized() || !$arResult['PROPERTIES']['IS_LOGIN']['VALUE']): ?>
    <section class="<?php echo e($block); ?>">
        <div class="<?php echo e($block->elem('container')); ?>">
                <?php echo $renderer->renderBlock(
                    'main/main-title',
                    ['titleText' => $arResult['NAME'],]
                    ); ?>


                
                <div class="<?php echo e($block->elem('content-wrapper')); ?>">
                    <div class="<?php echo e($block->elem('text')); ?>">
                        <div class="<?php echo e($block->elem('date')); ?>"><?php echo e($arResult['PROPERTIES']["CREATION_DATE"]["VALUE"]); ?></div>
                        <h2 class="<?php echo e($block->elem('announce')); ?>"><?php echo $arResult['PREVIEW_TEXT']; ?></h2> 
                        <div class="<?php echo e($block->elem('detail-text')); ?>">
                            <?php echo $arResult['DETAIL_TEXT']; ?>

                        </div>
                            <?php echo $renderer->renderBlock(
                                'main/main-categories',
                                ['arResult' => $arResult]
                                ); ?>

                            <?php echo $renderer->renderBlock(
                                'main/main-news-button',
                                ['text' => 'назад к новостям',
                                'link' => '/news/']
                                ); ?>

                    </div>
                    <img class="<?php echo e($block->elem('img')); ?>" src="<?php echo e($arResult['DETAIL_PICTURE']['SRC']); ?>"
                        alt="<?php echo e($arResult['DETAIL_PICTURE']['ALT']); ?>">


                </div>

        </div>
    </section>
<?php else: ?>
    <section class="<?php echo e($block); ?>">
        <div class="<?php echo e($block->elem('registration')); ?>">
            <h2 class="<?php echo e($block->elem('reg-title')); ?>">Пожалуйста авторизируйтесь, или зарегистрируйтесь!</h2>
            <p class="<?php echo e($block->elem('reg-paragraph')); ?>">Даная новость доступна только авторизованным пользователям</p>
            <div class="<?php echo e($block->elem('link-wrapper')); ?>">
                <a class="<?php echo e($block->elem('link')); ?>" href="/profile/login.php">Логин</a>
                <a class="<?php echo e($block->elem('link')); ?>" href="/profile/reg.php">Регистрация</a>
            </div>


        </div>
    </section>
<?php endif; ?><?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/main/main-detail-news/main-detail-news.blade.php ENDPATH**/ ?>