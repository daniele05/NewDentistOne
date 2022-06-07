<?php
require_once("controllers/MainController.php");

class VisitorController extends MainController
{
    public function home()
    {
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