<section class="section news-section">
    <div class="container">
        <h2 class="title">
            Новости
        </h2>
        <div class="news-wrapper">
            <?php foreach ($news as $new): ?>
                <?php
                $date = htmlentities($new['date']);
                $date = substr($date, 8, 2) . "." . substr($date, 5, 2) . "." . substr($date, 0, 4);
                ?>

                    <a href="./?page=new&id=<?= htmlentities($new['id']) ?>" class="news-item">
                    <div class="news-item__date"><?= $date ?></div>
                    <h3 class="news-item__title"><?= htmlentities($new['title']) ?></h3>
                    <?= strip_tags($new['announce'], '<p><br>') ?>
                    <div class="news-item__link" >Подробнее &rarr;</div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="container">
        <div class="news-pagination">
            <?php
            if ($totalPages <= 3) {
                $start = 1;
                $end = $totalPages;
            } else {
                if ($curPage == 1) {
                    $start = 1;
                    $end = 3;
                } elseif ($curPage == $totalPages) {
                    $start = $totalPages - 2;
                    $end = $totalPages;
                } else {
                    $start = $curPage - 1;
                    $end = $curPage + 1;
                }
            }
            ?>
            <?php if ($curPage == $totalPages): ?>
                <a class="arrow-prev news-pagination__arrow" href="?page=home&p=<?= $curPage-1 ?>"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 7C0.447715 7 -4.82823e-08 7.44772 0 8C4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM16.466 8.70711C16.8565 8.31658 16.8565 7.68342 16.466 7.29289L10.102 0.928931C9.7115 0.538407 9.07834 0.538407 8.68781 0.928932C8.29729 1.31946 8.29729 1.95262 8.68781 2.34315L14.3447 8L8.68781 13.6569C8.29729 14.0474 8.29729 14.6805 8.68781 15.0711C9.07834 15.4616 9.7115 15.4616 10.102 15.0711L16.466 8.70711ZM1 9L15.7589 9L15.7589 7L1 7L1 9Z" fill="#841844"/>
</svg></a>
            <?php endif; ?>
            <?php for ($i = $start; $i <= $end; $i++): ?>
                <?php if ($i == $curPage): ?>
                    <span class="news-pagination__number news-pagination__active"><?= $i ?></span>
                <?php else: ?>
                    <a class="news-pagination__number" href="?page=home&p=<?= $i ?>"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($curPage < $totalPages): ?>
                <a class="news-pagination__arrow" href="?page=home&p=<?= $curPage + 1 ?>"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 7C0.447715 7 -4.82823e-08 7.44772 0 8C4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM16.466 8.70711C16.8565 8.31658 16.8565 7.68342 16.466 7.29289L10.102 0.928931C9.7115 0.538407 9.07834 0.538407 8.68781 0.928932C8.29729 1.31946 8.29729 1.95262 8.68781 2.34315L14.3447 8L8.68781 13.6569C8.29729 14.0474 8.29729 14.6805 8.68781 15.0711C9.07834 15.4616 9.7115 15.4616 10.102 15.0711L16.466 8.70711ZM1 9L15.7589 9L15.7589 7L1 7L1 9Z" fill="#841844"/>
                </svg>
</a>
            <?php endif; ?>


        </div>
    </div>

</section>