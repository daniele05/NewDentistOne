<?php
require_once("controllers/AbstractController.php");
require_once("models/Administrateur/Administrateur.model.php");

class AdministrateurController extends AbstractController
{
    private $administrateurManager;

    public function __construct()
    // instanciation du adminManager
    {
        $this->administrateurManager = new AdministrateurManager;
    }

    public function droits()
    {

        $users = $this->administrateurManager->getUsers();

        $data = [
            //page_description et page_title
            "titre" => "gestion de droits",
            "users" => $users,
            "view" => "views/Administrateur/droits.view.php",
            "template" => "views/template.php",
        ];
        $this->genererPage($data);
    }
    public function validation_modificationRole($login, $role)
    {
        if ($this->administrateurManager->bdModificationRoleUser($login, $role)) {
            Toolbox::ajouterMessageAlerte("La modification a été prise en compte", Toolbox::VERTE);
        } else {
            Toolbox::ajouterMessageAlerte("La modification n'a pas été prise en compte", Toolbox::ROUGE);
            header("Location:" . URL . "administrateur/droits");
        }
    }
    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}