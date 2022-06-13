<?php
require_once "models/Model.class.php";

abstract class AbstractController extends Model
{

    public function genererPage($data)
    {
        ob_start();
        extract($data);
        require_once $view;
        $content = ob_get_clean();
        require_once "views/template.php";
    }

    protected function pageErreur($msg)
    {
        $data_page = [
            "description" => "page permettant de gérér les erreurs",
            "titre" => "Page d'erreur",
            "msg" => $msg,
            "view" => "views/error.view.php",
            "template" => "views/template.php"
        ];
        $this->genererPage($data_page);
    }
}