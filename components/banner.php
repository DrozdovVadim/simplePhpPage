<section class="section banner__section swiper">
    <div class="swiper-wrapper banner__wrapper">

        <?php foreach ($banners as $banner): ?>
            <div class="swiper-slide">
                <img src="/siteTest/assets/images/newsPhoto/<?= htmlspecialchars($banner['image']) ?>" alt="Banner image">
                <div class="container banner-item__text">
                    <h2><?= htmlentities($banner['title']) ?></h2>
                    <?= strip_tags($banner['announce'], '<p><br><strong><em>') ?>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>