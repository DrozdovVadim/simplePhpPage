   
    
    <div class="container">
        <div class="news-pagination">
            <?php
            $start = 1;
            $end = $count;
            if ($totalPages != $count){
                if($end - $currentPage <2 && $end+1 <=total)
                {
                    $start+=1;
                    $end+=1;
                }
            }
            ?>
            <?php
            if ($totalPages <= $count) {
                $start = 1;
                $end = $totalPages;
            } else {
                if ($currentPage == 1) {
                    $start = 1;
                    $end = $count;
                } elseif ($currentPage == $totalPages) {
                    $start = $totalPages - 2;
                    $end = $totalPages;
                } else {
                    $start = $currentPage - 1;
                    $end = $currentPage + 1;
                }
            }
            ?>
            <?php if ($currentPage == $totalPages): ?>
                <a class="arrow-prev news-pagination__arrow" href="/news/page-<?= $currentPage - 1 ?>/"> <?= $arrow; ?> </a>
            <?php endif; ?>
            <?php for ($i = $start; $i <= $end; $i++): ?>
                <?php if ($i == $currentPage): ?>
                    <span class="news-pagination__number news-pagination__active"><?= $i ?></span>
                <?php else: ?>
                    <a class="news-pagination__number" href="/news/page-<?= $i ?>/"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($currentPage < $totalPages): ?>
                <a class="news-pagination__arrow" href="/news/page-<?= $currentPage + 1 ?>/"><?= $arrow; ?></a>
            <?php endif; ?>


        </div>
    </div>