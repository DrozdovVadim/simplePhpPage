<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    <link rel="stylesheet" href="/siteTest/assets/style/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" type="text/javascript"></script>
</head>

<body>

    <?php
    require_once('./database.php');

    require_once('./models/BannerModel.php');
    require_once('./models/newsModel.php');

    require_once('./controller/newsController.php');

    $bannerModel = new BannerModel($pdo);
    $banners = $bannerModel->getBanner();

    $newsController = new NewsController($pdo);
    $newsData = $newsController->index();
    $news = $newsData['news'];
    $curPage = $newsData['curPage'];
    $totalPages = ceil($newsData['total'] / 4);

    require_once('./components/header.php');
    require_once('./components/banner.php');
    require_once('./components/news.php');
    require_once('./components/footer.php');
    ?>

    <script src="/siteTest/assets/script/main.js"></script>
</body>

</html>