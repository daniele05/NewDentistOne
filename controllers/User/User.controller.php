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
            } else {
                Toolbox::ajouterMessageAlerte("le compte" . $login . " n'a pas été activé", Toolbox::ROUGE);
                header("Location:" . URL . "login");
            }
        } else {
            Toolbox::ajouterMessageAlerte("combinaison login/ mot de passe non valide", Toolbox::ROUGE);
            header("Location:" . URL . "login");
        }
    }


    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}