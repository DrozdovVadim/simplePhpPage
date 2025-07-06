<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    <link rel="stylesheet" href="/siteTest/assets/style/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" type="text/javascript"></script>
</head>

<body>

<?php
require_once('./database.php');
require_once('./models/BannerModel.php');
require_once('./models/newsModel.php');
require_once('./models/currentNewsModel.php');
require_once('./controller/newsController.php');
require_once('./controller/currentNewsController.php');

// Общие данные (например, баннер)
$bannerModel = new BannerModel($pdo);
$banners = $bannerModel->getBanner();

// Роутинг
$route = isset($_GET["page"]) ? $_GET["page"] : 'home';
$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$newId = isset($_GET['id']) ? (int)$_GET['id'] : '';


switch ($route) {
    case 'home':
        $newsController = new NewsController($pdo);
        $newsData = $newsController->index($page);

        $news = $newsData['news'];
        $curPage = $newsData['curPage'];
        $totalPages = ceil($newsData['total'] / 4);

        require_once('./components/header.php');
        require_once('./components/banner.php');
        require_once('./components/news.php');
        require_once('./components/footer.php');
        break;

    case 'new':
        $currentNewsController = new CurrentNewController($pdo);
        $currentNew = $currentNewsController->index($newId);

        require_once('./components/header.php');
        require_once('./components/curNews.php');
        require_once('./components/footer.php');
        break;

    default:
        http_response_code(404);
        echo "<h1>404 - Страница не найдена</h1>";
        break;
}
?>

<script src="/siteTest/assets/script/main.js"></script>
</body>
</html>