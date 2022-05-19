<?php
require_once "models/Model.class.php";
require_once "models/Dentiste.class.php";

class UserManager extends Model
{
    public function login()
    {
        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];

            $req = "SELECT * FROM dentiste where email = '$login'";
            $result = $this->getBdd()->prepare($req);
            $result->execute();
        }

        if ($result->rowCount() > 0) {
            $data = $result->fetchAll();
            // verif si le mdp inséré est le bon
            if (password_verify($mdp, $data[0]["mdp"])) {
                echo "Connexion effectuée";
                $_SESSION['login'] = $login;
            }
        } else {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            $req =  "INSERT INTO dentiste(login, mdp) VALUES('$login', '$mdp')";
            $result = $this->getBdd()->prepare($req);
            $result->execute();
            echo "Enregistrement effectué";
        }
    }
}