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

    public function bdModificationRoleUser($login, $role)
    {
        $req = "UPDATE users set role = :role where login = :login";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":role", $role, PDO::PARAM_STR);
        $stmt->execute();
        $estModifier = ($stmt->rowCount() > 0);  // > 0 c est vrai 
        $stmt->closeCursor(); // > 0 c est vrai 
        return $estModifier;
    }
}