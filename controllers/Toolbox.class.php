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
}