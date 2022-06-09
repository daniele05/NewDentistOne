<?php
abstract class AbstractController
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

    public function home()
    {
        $data_page = [
            "description" => "description page accueil",
            "title" => "Titre page",
            "view" => "views/home.view.php",
            "template" => "views/template.php"
        ];
        $this->genererPage($data_page);
    }
    public function pageErreur($msg)
    {
        $data_page = [
            "description" => "page permettant de gérér les erreurs",
            "title" => "Page d'erreur",
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