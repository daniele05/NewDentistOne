<?php
class Securite
{
    //  securite en plus avec un cookie de session
    const COOKIE_NAME = "timers";

    public static function secureHTML($string)
    {
        return htmlentities($string);
    }
    public static function estConnecte()
    {
        // retourne la session profil si existe ou non
        return (!empty($_SESSION['profil']));
    }
    public static function estUser()
    {
        return ($_SESSION['profil']['role'] === "user");
    }
    public static function estAdministrateur()
    {
        return ($_SESSION['profil']['role'] === "100");
    }
    //  function permettant de gerer un cookie 
    public static function genererCookieConnexion()
    {
        $ticket = session_id() . microtime() . rand(0, 999999);
        //  on crypte le ticket
        $ticketCrypte = password_hash($ticket, PASSWORD_DEFAULT);
        //  on enregistre le ticket crypte dans la machine de l'utilisateur
        setcookie(self::COOKIE_NAME, $ticketCrypte, time() + (60 * 20));
        //  on enregistre le ticket crypte coté serveur en utilisant la session
        $_SESSION['profil']['self::COOKIE_NAME'] = $ticketCrypte;
    }
    // Controller avec une autre function 
    public static function checkCookieConnexion()
    {
        // retourner la comparaison entre 
        return $_COOKIE[self::COOKIE_NAME] === $_SESSION['profil']['self::COOKIE_NAME'];
    }
}