<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    <link rel="stylesheet" href="/assets/style/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" type="text/javascript"></script>
</head>

<body>

    <?php

    spl_autoload_register(function($class)
    {

        $class_name = str_replace("\\", "/", $class);
        $file = __DIR__ . "/" . $class_name . ".php";
        if(file_exists($file)){
            require_once($file);
        }
    });

    use App\Controllers\NewsController;
    use App\Controllers\BaseController;
    use App\Models\NewsModel;
    
    $route = isset($_GET["page"]) ? $_GET["page"] : 'home';
    $page = isset($_GET['p']) ? (int) $_GET['p'] : 1;
    $newId = isset($_GET['id']) ? (int) $_GET['id'] : '';

    $matches=[];
    $requestUri = $_SERVER['REQUEST_URI'];
    switch (true) {
    case $requestUri === '/':
        $BaseController = new BaseController();
        $BaseController->showMain();
        break;

    case $requestUri === '/news/':
        $newsController = new NewsController();
        $newsController->showList($page);
        break;

    case preg_match('~^/news/(\d+)/$~', $requestUri, $matches):
        $newsController = new NewsController();
        $newsController->showDetail($matches[1]);
        break;
    case preg_match('~^/news/page-(\d+)/$~', $requestUri, $matches):
        $newsController = new NewsController();
        $newsController->showList($matches[1]);
        break;

    default:
        $baseController = new BaseController();
        $baseController->show404();

        break;
}
    ?>

    <script src="/assets/script/main.js"></script>
</body>

</html>