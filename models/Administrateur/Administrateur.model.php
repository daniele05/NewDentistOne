<?php
require_once "./models/Model.class.php";

class AdministrateurManager extends Model
{
    public function getUsers()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM users");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}