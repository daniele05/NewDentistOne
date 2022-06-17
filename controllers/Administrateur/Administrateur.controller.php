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
    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}