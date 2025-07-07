<section class="section banner__section swiper">
    <div class="swiper-wrapper banner__wrapper">

        <?php foreach ($banners as $banner): ?>

            <a href="http://194.147.33.204/?page=news&id=<?= htmlentities($banner['id']) ?>" class="swiper-slide">
                <img src="/assets/images/newsPhoto/<?= htmlspecialchars($banner['image']) ?>" alt="Banner image">
                <div class="container banner-item__text">
                    <h2><?= htmlentities($banner['title']) ?></h2>
                    <?= strip_tags($banner['announce'], '<p><br><strong><em>') ?>
                </div>
            </a>
        <?php endforeach; ?>

    </div>
</section>