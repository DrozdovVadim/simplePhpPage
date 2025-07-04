<?php
class NewsModel
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getNews($limit, $offset)
    {
        $req = $this->db->prepare("SELECT id, title, date, announce FROM news ORDER BY id DESC LIMIT :limit OFFSET :offset;");
        // Привязываем параметры как целые числа
        $req->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $req->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getNewsCount()
    {
        $req = $this->db->prepare("SELECT COUNT(*) as total from news;");
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC)['total'];
    }
}