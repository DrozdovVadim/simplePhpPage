<?php 
namespace App\Models;

use App\DB;

class NewsModel
{

    public function getBanners()
    {
        $req = DB::getConnection()->prepare("SELECT id, title, announce, image FROM news;");
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getRows($limit, $offset, $tableName)
    {
        $req = DB::getConnection()->prepare("SELECT id, title, date, announce FROM `$tableName` ORDER BY date DESC LIMIT :limit OFFSET :offset;");
        $req->bindValue(':limit', (int) $limit, \PDO::PARAM_INT);
        $req->bindValue(':offset', (int) $offset, \PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(\PDO::FETCH_ASSOC); 
    }

    public function getCount($tableName)
    {
        $req = DB::getConnection()->prepare("SELECT COUNT(*) as total from `$tableName`;");
        $req->execute();
        return $req->fetch(\PDO::FETCH_ASSOC)['total'];
    }

    public function getItem($id)
    {
        $req = DB::getConnection()->prepare("SELECT * FROM news WHERE id = :id");
        $req->bindParam(':id', $id, \PDO::PARAM_INT);
        $req->execute();
        return $req->fetch(\PDO::FETCH_ASSOC);
    }

}