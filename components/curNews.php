<section class="section news-detail__section">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/">Главная</a>
            <span class="breadcrumbs__stick">/</span>
            <span class="breadcrumbs__cur-page"> <?= htmlentities($currentNew['title']) ?></span>
        </div>
        <div class="new">
            <h1 class="news-detail__title"><?= htmlentities($currentNew['title']) ?></h1>
            <div class="news-detail">
                <div class="news-detail__text">
                    <?php
                    $date = htmlentities($currentNew['date']);
                    $date = substr($date, 8, 2) . "." . substr($date, 5, 2) . "." . substr($date, 0, 4);
                    $announce = $currentNew['announce'];
                    $announce = str_replace(['<p>', '</p>'], '', $announce);
                    ?>
                    <div class="news-item__date"><?= htmlentities($date) ?></div>
                    <h2 class="news-detail__announce"><?= htmlentities($announce) ?></h2>
                    <img class="news-detail__img hidden-img" src="/assets/images/newsPhoto/<?= htmlentities($currentNew['image']) ?>" alt="newPhoto">   
                    <div class="news-detail__content">
                        <?= strip_tags($currentNew['content'], '<p>,</p>,<br>,<em>') ?>
                    </div>

                    <a class="news-detail__link" href="/"><svg width="26" height="16"
                            viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.293015 8.70711C-0.0975094 8.31658 -0.0975094 7.68342 0.293014 7.2929L6.65698 0.928934C7.0475 0.538409 7.68067 0.538409 8.07119 0.928934C8.46171 1.31946 8.46171 1.95262 8.07119 2.34315L2.41434 8L8.07119 13.6569C8.46171 14.0474 8.46171 14.6805 8.07119 15.0711C7.68067 15.4616 7.0475 15.4616 6.65698 15.0711L0.293015 8.70711ZM26 9L1.00012 9L1.00012 7L26 7L26 9Z"
                                fill="#841844" />
                        </svg>
                        Назад к новостям</a>
                </div>
                <img class="news-detail__img" src="/assets/images/newsPhoto/<?= htmlentities($currentNew['image']) ?>"
                    alt="newPhoto">


            </div>

        </div>
</section>