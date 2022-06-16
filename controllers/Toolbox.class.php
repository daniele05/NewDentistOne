<?php
class Toolbox
{
    const ROUGE = 'danger';
    const ORANGE = 'warning';
    const VERTE = 'success';

    public static function ajouterMessageAlerte($message, $type)
    {
        $_SESSION['alert'][] = [
            "message" => $message,
            "type" => $type,
        ];
    }

    public static function afficherMessageAlerte()
    {

        if (isset($_SESSION['alert']) && !empty($_SESSION['alert'])) {

            foreach ($_SESSION['alert'] as $value) {
                var_dump($value);
                print '<p>' . $value["message"] . '</p>';
            }
            unset($_SESSION['alert']);
        }
    }
}