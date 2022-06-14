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
        // $users = $this->visitorManager->getUsers();
        // print_r($users);
        // die();

        $data = [
            "titre" => "Cabinet dentaire d'Antony",
            // "users" => $users,
            "view" => "views/Visitor/home.view.php"

        ];
        $this->genererPage($data);
    }

    public function login()
    {
        $data = [
            //page_description et page_title
            "titre" => "connexion",
            "view" => "views/Visitor/login.view.php",
            "template" => "views/template.php",
        ];
        $this->genererPage($data);
    }
    public function creerCompte()
    {
        $data = [
            //page_description et page_title
            "titre" => "page de création de compte",
            "view" => "views/Visitor/creerCompte.view.php",

        ];
        $this->genererPage($data);
    }

    public function pageErreur($msg)
    {
        // heriter de l apage parent pageErreur
        parent::pageErreur($msg);
    }
}