<?php
namespace App\Controllers;

use App\Models\NewsModel;

class NewsController
{
    private $newsModel;
    private $limit = 4;

    private function GetModel()
    {
        return new NewsModel();
    }
    
    public function showMain()
    {
        require_once("view/header.php");
        require_once("view/main.php");
        require_once("view/footer.php");
    }

    public function showList($page=1)
    {
        $offset = ($page - 1) * $this->limit;
        $banners = $this->GetModel()->getBanners();
        $news = $this->GetModel()->getRows($this->limit, $offset);
        $newsModel = new NewsModel();
        $page = max(1, $page);
        $total = $this->GetModel()->getCount();
        $newsData = ['news' => $news, 'total' => $total, 'curPage' => $page,];
        require_once("view/header.php");
        require_once("view/banner.php");
        require_once("view/news.php");
        require_once("view/footer.php");
    }

     public function showDetail($id)
    {
        $newsModel = new NewsModel();
        $new = $this->GetModel()->getItem($id); 
        require_once("./view/header.php");
        require_once("./view/curNews.php");
        require_once("./view/footer.php");
    }


}