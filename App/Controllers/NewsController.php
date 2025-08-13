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
    private function showContent($name, $data = [])
    {
        return require_once($name);
    }
    
    public function showList($page=1)
    {
        $newsModel = new NewsModel();
        $name = "view/news/list.php";
        $offset = ($page - 1) * $this->limit;
        $banners = $this->GetModel()->getBanners();
        $news = $this->GetModel()->getRows($this->limit, $offset);
        $total = $this->GetModel()->getCount();
        $page = max(1, $page);
        
        $newsData = ['news' => $news, 'total' => $total, 'curPage' => $page, 'banners' => $banners];
        ob_start();
        $this->showContent($name, $newsData);
        $content = ob_get_clean();
        require_once("view/templates/layout.php");
    }

     public function showDetail($id)
    {
        $name = "view/news/detail.php";
        $newsModel = new NewsModel();
        $new = $this->GetModel()->getItem($id); 
        ob_start();
        $this->showContent($name, $new);
        $content = ob_get_clean();
        require_once("view/templates/layout.php");
    }


}