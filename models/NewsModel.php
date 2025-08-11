<?php
require_once("./DataBaseModel.php");

class NewsModel
{
    

    public function getBanners()
    {
        $req = DataBaseModel::getConnection()->prepare("SELECT id, title, announce, image FROM news;");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRows($limit, $offset)
    {
        $req = $this->db->prepare("SELECT id, title, date, announce FROM news ORDER BY date DESC LIMIT :limit OFFSET :offset;");
        $req->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
        $req->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCount()
    {
        $req = $this->db->prepare("SELECT COUNT(*) as total from news;");
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function getItem($id)
    {
        $req = $this->db->prepare("SELECT * FROM news WHERE id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }

}