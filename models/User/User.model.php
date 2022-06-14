<?php
require_once "./models/Model.class.php";

class UserManager extends Model
{
    private function getPasswordUser($login)
    {

        //recup du password prpore au login via la req
        $req = "SELECT password FROM users WHERE login = :login"; // req propre au PDO dou utilisation de binValue apres
        $stmt = $this->getBdd()->prepare($req);
        // securistaion de la req abvec binValue
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result['password'];
    }

    public function isCombinaisonValide($login, $password)
    {
        $passwordBD = $this->getPasswordUser($login);
        echo $passwordBD;
        return password_verify($password, $passwordBD);
    }

    public function estCompteActive($login)
    {
        $req = "SELECT est_valide FROM users WHERE login = :login"; // req propre au PDO dou utilisation de binValue apres
        $stmt = $this->getBdd()->prepare($req);
        // securistaion de la req abvec binValue
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return ((int)$result['est_valide'] === 1) ? true : false;
    }
    public function getUserInformation($login)
    {
        $req = "SELECT* FROM users WHERE login = :login"; // req propre au PDO dou utilisation de binValue apres
        $stmt = $this->getBdd()->prepare($req);
        // securistaion de la req abvec binValue
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }
}