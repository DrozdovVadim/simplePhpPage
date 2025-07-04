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

                <div class="news-item">
                    <div class="news-item__date"><?= $date ?></div>
                    <h3 class="news-item__title"><?= htmlentities($new['title']) ?></h3>
                    <?= strip_tags($new['announce'], '<p><br>') ?>
                    <a class="news-item__link" href="/new_id?=<?= htmlentities($new['id']) ?>">Подробнее &rarr;</a>
                </div>
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
                <a href="?page=<?= $curPage - 1 ?>">&larr;</a>
            <?php endif; ?>
            <?php for ($i = $start; $i <= $end; $i++): ?>
                <?php if ($i == $curPage): ?>
                    <span><?= $i ?></span>
                <?php else: ?>
                    <a href="?page=<?= $i ?>"><?= $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($curPage < $totalPages): ?>
                <a href="?page=<?= $curPage + 1 ?>">&rarr;</a>
            <?php endif; ?>


        </div>
    </div>

</section>