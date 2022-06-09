<?php
require_once("controllers/AbstractController.php");
require_once("models/Visitor/Visitor.model.php");

class VisitorController extends AbstractController
{
    private $visitorManager;

    public function __construct()
    // instanciation du visitorManager
    {
        $this->visitorManager = new VisitorManager;
    }
    public function home()
    {
        // appel de mes user 
        $users = $this->visitorManager->getUsers();
        // vérification de mes users
        print_r($users);
        $data_page = [
            // page_description et page_title important pour le référencement
            "page_description" => "Description de la page",
            "page_title" => "titre de la page",
            "view" => "views/Visitor/home.view.php",
            "template" => "views/template.php"
        ];
        $this->genererPage($data_page);
    }

    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}