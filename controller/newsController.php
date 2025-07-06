<?php
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
        if ($page < 1)
            $page = 1;
        $offset = ($page - 1) * $this->limit;
        $news = $this->news_model->getNews($this->limit, $offset);
        $total = $this->news_model->getNewsCount();
        return ['news' => $news, 'total' => $total, 'curPage' => $page];
    }

}