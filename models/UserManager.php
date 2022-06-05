<?php
class UserManager extends Model
{
    // public function login()
    // {
    //     if (isset($_POST['submit'])) {
    //         $idPatient = $_POST['idPatient'];
    //         $mdp = $_POST['mdp'];

    //         $req = "SELECT * FROM connexionEspaceOrdonnance where email = '$idPatient'";
    //         $result = $this->getBdd()->prepare($req);
    //         $result->execute();
    //     }

    //     if ($result->rowCount() > 0) {
    //         $data = $result->fetchAll();
    //         // verif si le mdp inséré est le bon
    //         if (password_verify($mdp, $data[0]["mdp"])) {
    //             echo "Connexion effectuée";
    //             $_SESSION['login'] = $idPatient;
    //         }
    //     } else {
    //         $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    //         $req =  "INSERT INTO connexionEspaceOrdonnance(login, mdp) VALUES('$idPatient', '$mdp')";
    //         $result = $this->getBdd()->prepare($req);
    //         $result->execute();
    //         echo "Enregistrement effectué";
    //     }
    // }
}