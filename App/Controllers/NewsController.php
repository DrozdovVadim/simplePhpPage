<?php
namespace App\Controllers;

use App\Models\NewsModel;


class NewsController extends BaseController
{
    private $newsModel;

    private function GetModel()
    {
        return new NewsModel();
    }
    
    public function showList($page=1)
    {
        $paginationElemsCount = 3;
        $limit = 4;
        $offset = ($page - 1) * $limit;
        $tableName = 'news';
        $banners = $this->GetModel()->getBanners();
        $news = $this->GetModel()->getRows($limit, $offset, $tableName);
        $total = $this->GetModel()->getCount();
        $listName = 'news';
        $data = [
            'news' => $news,
            'total' => $total,
            'currentPage' => max(1, $page),
            'banners' => $banners,
            'totalPages' => ceil($total / $limit),
            'listName' => $listName,
            'count' => min($paginationElemsCount, ceil($total / $limit)),
        ];
        
        $template = "news/list";
        $layout = "layouts/deafult";
        
        $this->render($template, $layout, $data);
        
    }

     public function showDetail($id)
    {
        
        $data = $this->GetModel()->getItem($id); 

        $template = "news/detail";
        $layout = "layouts/deafult";
        
        $this->render($template, $layout, $data);
        
    }


}