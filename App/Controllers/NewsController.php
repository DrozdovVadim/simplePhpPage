<?php
namespace App\Controllers;

class NewsController extends BaseController
{
    private $newsModel;


    
    public function showList($page=1)
    {
        $paginationElemsCount = 3;
        $limit = 4;
        $offset = ($page - 1) * $limit;
        $tableName = 'news';
        $generateLink = function($id) {return "/news/" . "page-" . $id . "/";};
        $banners = $this->GetModel()->getBanners();
        $news = $this->GetModel()->getRows($limit, $offset, $tableName);
        $total = $this->GetModel()->getCount("news");
        $listName = 'news';
        $data = [
            'news' => $news,
            'total' => $total,
            'currentPage' => max(1, $page),
            'banners' => $banners,
            'totalPages' => ceil($total / $limit),
            'link' =>$generateLink,
            'count' => min($paginationElemsCount, ceil($total / $limit)),
        ];
        
        $template = "news/list";
        $layout = "layouts/deafult";
        $pagination = "base/pagination";
        
        $this->render($template, $data);
        
    }

     public function showDetail($id)
    {
        
        $data = $this->GetModel()->getItem($id); 
        $template = "news/detail";
        $layout = "layouts/deafult";
        
        $this->render($template,  $data);
        
    }




}