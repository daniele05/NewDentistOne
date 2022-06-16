<?php
require_once("controllers/AbstractController.php");
require_once("models/User/User.model.php");
// require_once("models/Visitor/Visitor.model.php");

class UserController extends AbstractController
{
    private $userManager;

    public function __construct()
    // instanciation du visitorManager
    {
        $this->userManager = new UserManager;
    }

    public function validation_login($login, $password)
    {
        if ($this->userManager->isCombinaisonValide($login, $password)) {
            if ($this->userManager->estCompteActive($login)) {
                // Toolbox::ajouterMessageAlerte(" bon retour sur le site" . $login . "!", Toolbox::VERTE);
                $_SESSION['profil'] = [
                    "login" => $login
                ];
                header("Location: " . URL . "compte/profil");
            } else {
                Toolbox::ajouterMessageAlerte("le compte" . " " . $login . " n'a pas été activé par mail", Toolbox::ROUGE);
                header("Location:" . URL . "login");
            }
        } else {
            Toolbox::ajouterMessageAlerte("combinaison login/ mot de passe non valide", Toolbox::ROUGE);
            header("Location:" . URL . "login");
        }
    }

    public function profil()
    {
        // die(var_dump(get_defined_vars()));
        // affichage d info d un user spécifique pas de tous les users
        $datas = $this->userManager->getUserInformation($_SESSION["profil"]["login"]);
        // le role 
        $_SESSION['profil']["role"] = $datas['role'];
        $data = [
            "titre" => "page de profil",
            "user" => $datas,
            "view" => "views/User/profil.view.php"
        ];
        $this->genererPage($data);
        // print_r($datas);
        // die();
    }

    public function deconnexion()
    {
        Toolbox::ajouterMessageAlerte("la déconnexion est effectuée", Toolbox::VERTE);
        unset($_SESSION['profil']);
        header("Location:" . URL . "home");
    }

    public function validation_creerCompte($login, $password, $mail)
    {
        if ($this->userManager->verifLoginAvailable($login)) {
            $passwordCrypte = password_hash($password, PASSWORD_DEFAULT);
            // compter avec rand le nombre de ligne 
            $clef = rand(0, 9999); // servira pour la validation du mail de confirmation
            $role = 1;
            $est_valide = 0;

            if ($this->userManager->bdCreerCompte($login, $passwordCrypte, $mail, $role, $est_valide)) {
                Toolbox::ajouterMessageAlerte("Le compte a été crée, un mail de validation a été envoyé", Toolbox::VERTE);
                header("Location:" . URL . "login");
            } else {
                Toolbox::ajouterMessageAlerte("Erreur lors de la création du compte, recommencez !", Toolbox::ROUGE);
                header("Location:" . URL . "creerCompte");
            }
        } else {
            Toolbox::ajouterMessageAlerte("le login est déjà utilisé", Toolbox::ROUGE);
            header("Location:" . URL . "creerCompte");
        }
    }

    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}
