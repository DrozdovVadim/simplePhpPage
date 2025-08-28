
<div class="<?php echo e($block); ?>">
    <div class="<?php echo e($block->elem('wrapper')); ?>">
        <?php
        
        $currentPage = $arResult['NavPageNomer'];
        $totalPages = $arResult['NavPageCount'];
        $start = max(1, $currentPage - 1);
        $end = min($totalPages, $currentPage + 1);
        
        if ($currentPage == 1) {
            $end = min($totalPages, 3);
        }
        if ($currentPage == $totalPages)
        {
            $start = max($currentPage-2, 1);
        }
        
        $arrow = '<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path  d="M1 7C0.447715 7 -4.82823e-08 7.44772 0 8C4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM16.466 8.70711C16.8565 8.31658 16.8565 7.68342 16.466 7.29289L10.102 0.928931C9.7115 0.538407 9.07834 0.538407 8.68781 0.928932C8.29729 1.31946 8.29729 1.95262 8.68781 2.34315L14.3447 8L8.68781 13.6569C8.29729 14.0474 8.29729 14.6805 8.68781 15.0711C9.07834 15.4616 9.7115 15.4616 10.102 15.0711L16.466 8.70711ZM1 9L15.7589 9L15.7589 7L1 7L1 9Z" fill="#841844"/>
                  </svg>';
        
        $link = function($page) use ($arResult) {
            $query = $arResult["NavQueryString"] ? '?'.$arResult["NavQueryString"].'&' : '?';
            $pageParam = 'PAGEN_'.$arResult["NavNum"].'=';
            
            if ($page == 1 && !$arResult["bSavePage"]) {
                return $arResult["sUrlPath"].($arResult["NavQueryString"] ? '?'.$arResult["NavQueryString"] : '');
            }
            return $arResult["sUrlPath"].$query.$pageParam.$page;
        };
        ?>


        
        <!-- Стрелка "назад" -->
        <?php if($currentPage == $totalPages): ?>
            <a class="<?php echo e(@block->elem('arrow-prev')); ?>" href="<?php echo e($link(1)); ?>">
                <?php echo $arrow; ?>

            </a>
        <?php endif; ?>
        
        <!-- Страницы -->
        <?php for($i = $start; $i <= $end; $i++): ?>
            <?php if($i == $currentPage): ?>
                <span class="<?php echo e($block->elem('active')); ?>">
                    <?php echo $i; ?>

                </span>
            <?php else: ?>
                <a class="<?php echo e($block->elem('item')); ?>" href="<?php echo e($link($i)); ?>">
                    <?php echo $i; ?>

                </a>
            <?php endif; ?>
        <?php endfor; ?>
        
        <!-- Стрелка "вперед" -->
        <?php if($currentPage < $totalPages): ?>
            <a class="<?php echo e($block->elem('arrow-next')); ?>" href="<?php echo e($link($totalPages)); ?>">
                <?php echo $arrow; ?>

            </a>
        <?php endif; ?>
    </div>
</div>



<?php /**PATH /var/www/workspace/bitrix/www/local/templates/main/frontend/src/block/main/main-page-pagination/main-page-pagination.blade.php ENDPATH**/ ?>