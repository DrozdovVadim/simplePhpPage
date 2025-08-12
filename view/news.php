<section class="section news-section">
    <div class="container">
        <h1 class="title">
            Новости
        </h1>
        <div class="news-wrapper">
            <?php foreach ($newsData['news'] as $new): ?>
                <?php
                $date = htmlentities($new['date']);
                $date = substr($date, 8, 2) . "." . substr($date, 5, 2) . "." . substr($date, 0, 4);
                ?>

                <a href="/?page=news&id=<?= htmlentities($new['id']) ?>" class="news-item">
                    <div class="news-item__date"><?= $date ?></div>
                    <h2 class="news-item__title"><?= htmlentities($new['title']) ?></h2>
                    <?= strip_tags($new['announce'], '<p><br>') ?>
                    <div class="news-item__link">Подробнее <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.293015 8.70711C-0.0975094 8.31658 -0.0975094 7.68342 0.293014 7.2929L6.65698 0.928934C7.0475 0.538409 7.68067 0.538409 8.07119 0.928934C8.46171 1.31946 8.46171 1.95262 8.07119 2.34315L2.41434 8L8.07119 13.6569C8.46171 14.0474 8.46171 14.6805 8.07119 15.0711C7.68067 15.4616 7.0475 15.4616 6.65698 15.0711L0.293015 8.70711ZM26 9L1.00012 9L1.00012 7L26 7L26 9Z"
                                fill="#841844" />
                        </svg></div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="container">
        <div class="news-pagination">
            <?php
            $totalPages = ceil($newsData['total'] / 4);
            $curPage = $newsData['curPage'];
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
                <a class="arrow-prev news-pagination__arrow" href="?page=home&p=<?= $curPage - 1 ?>"><svg width="17"
                        height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 7C0.447715 7 -4.82823e-08 7.44772 0 8C4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM16.466 8.70711C16.8565 8.31658 16.8565 7.68342 16.466 7.29289L10.102 0.928931C9.7115 0.538407 9.07834 0.538407 8.68781 0.928932C8.29729 1.31946 8.29729 1.95262 8.68781 2.34315L14.3447 8L8.68781 13.6569C8.29729 14.0474 8.29729 14.6805 8.68781 15.0711C9.07834 15.4616 9.7115 15.4616 10.102 15.0711L16.466 8.70711ZM1 9L15.7589 9L15.7589 7L1 7L1 9Z"
                            fill="#841844" />
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
                <a class="news-pagination__arrow" href="?page=home&p=<?= $curPage + 1 ?>"><svg width="17" height="16"
                        viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 7C0.447715 7 -4.82823e-08 7.44772 0 8C4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM16.466 8.70711C16.8565 8.31658 16.8565 7.68342 16.466 7.29289L10.102 0.928931C9.7115 0.538407 9.07834 0.538407 8.68781 0.928932C8.29729 1.31946 8.29729 1.95262 8.68781 2.34315L14.3447 8L8.68781 13.6569C8.29729 14.0474 8.29729 14.6805 8.68781 15.0711C9.07834 15.4616 9.7115 15.4616 10.102 15.0711L16.466 8.70711ZM1 9L15.7589 9L15.7589 7L1 7L1 9Z"
                            fill="#841844" />
                    </svg>
                </a>
            <?php endif; ?>


        </div>
    </div>

</section>