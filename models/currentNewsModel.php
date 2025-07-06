<?php
class CurrentNewsModel {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getCurrentNew($id) {
        $req = $this->db->prepare("SELECT * FROM news WHERE id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
    }


}