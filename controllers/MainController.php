<?php
abstract class MainController
{
    const ROUGE = 'danger';
    const ORANGE = 'warning';
    const VERTE = 'success';


    protected function genererPage($data)
    {
        extract($data);
        ob_start();
        require_once($view);
        $content = ob_get_clean();
        require_once($template);
    }

    protected function pageErreur($msg)
    {
        $data_page = [
            "page_description" => "page permettant de gérér les erreurs",
            "page_title" => "Page d'erreur",
            "msg" => $msg,
            "view" => "views/error.view.php",
            "template" => "views/template.php"
        ];
        $this->genererPage($data_page);
    }


    public static function ajouterMessageAlerte($message, $type)
    {
        $_SESSION['alert'][] = [
            "message" => $message,
            "type" => $type,
        ];
    }
}