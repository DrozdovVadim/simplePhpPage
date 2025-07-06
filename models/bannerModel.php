<?php
class BannerModel
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getBanner()
    {
        $req = $this->db->prepare("SELECT id, title, announce, image FROM news;");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}