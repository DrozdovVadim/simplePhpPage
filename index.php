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
        if(file_exists($file))
        {
            require_once($file);
        }
    });

    use App\Controllers\NewsController;
    use App\Models\NewsModel;
    
    $route = isset($_GET["page"]) ? $_GET["page"] : 'home';
    $page = isset($_GET['p']) ? (int) $_GET['p'] : 1;
    $newId = isset($_GET['id']) ? (int) $_GET['id'] : '';

    switch ($route) {
        case 'home':
            
            $newsController = new NewsController();
            $newsController->showMain();
            break;

        case 'newslist':
            
            $newsController = new NewsController();
            $newsController->showList($page);
            break;

        case 'news':
            $newsController = new NewsController();
            $newsController->showDetail($newId);
            break;

        default:
            http_response_code(404);
            echo "<h1>404 - Страница не найдена</h1>";
            echo '<a href="/?page=home">Вернуться на Главную</a>';
            break;
    }
    ?>

    <script src="./assets/script/main.js"></script>
</body>

</html>