<?php
require_once("controllers/AbstractController.php");
require_once("models/Visitor/Visitor.model.php");
// require_once("models/Visitor/Visitor.model.php");

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
        $users = $this->visitorManager->getUsers();
        // print_r($users);
        // die();

        $data = [
            "titre" => "Cabinet dentaire d'Antony",
            "users" => $users,
            "view" => "views/Visitor/home.view.php"
        ];
        $this->genererPage($data);

        // appel de mes user 
        // $users = $this->visitorManager->getUsers();
        // vérification de mes users
        // print_r($users);
        // $data_page = [
        // page_description et page_title important pour le référencement
        // "page_description" => "Description de la page",
        // "page_title" => "titre de la page",
        // "view" => "views/Visitor/home.view.php",
        // "template" => "views/template.php"
        // ];
        // $this->genererPage($data_page);
    }

    public function login()
    {
        $data = [
            //page_description et page_title
            "titre" => "connexion",
            "view" => "views/Visitor/login.view.php",
        ];
        $this->genererPage($data);
    }

    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}