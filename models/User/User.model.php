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

    public function bdCreerCompte($login, $passwordCrypte, $mail, $role, $est_valide)
    {
        try {
            $req = "INSERT INTO users(login, password, mail, role, est_valide)
        VALUES(:login, :password, :mail,:role, :est_valide)";
            $stmt = $this->getBdd()->prepare($req);
            $stmt->bindValue(":login", $login, PDO::PARAM_STR);
            $stmt->bindValue(":password", $passwordCrypte, PDO::PARAM_STR);
            $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
            $stmt->bindValue(":role", $role, PDO::PARAM_STR);
            $stmt->bindValue(":est_valide", $est_valide, PDO::PARAM_INT);

            $stmt->execute();
            $estModifier = ($stmt->rowCount() > 0);  // > 0 c est vrai 
            $stmt->closeCursor(); // > 0 c est vrai 
            return $estModifier;
        } catch (PDOException  $e) {
            return false;
        }
    }

    public function verifLoginAvailable($login)
    {
        // recupreration du $user de la getUserinfo du dessus 
        $user = $this->getUserInformation($login);
        // verif du nbre de ligne recupere
        return empty($user);
    }
}// > 0 c est vrai 