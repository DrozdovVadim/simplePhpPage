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
    <div>
        <?php for ($i = 1; $i <= ceil($totalPages / 4); $i++): ?>
            <a href="?page=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>
    </div>
</section>