<?php
require_once('./models/NewsModel.php');

class NewsController
{
    private $news_model;
    private $limit = 4;

    public function __construct($db)
    {
        $this->news_model = new NewsModel($db);
    }

    public function index($page=1)
    {
        $page = max(1, $page);
        $offset = ($page - 1) * $this->limit;
        $news = $this->news_model->getRows($this->limit, $offset);
        $total = $this->news_model->getCount();
        return ['news' => $news, 'total' => $total, 'curPage' => $page];
    }
    
}