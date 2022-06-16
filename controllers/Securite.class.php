<?php
class Securite
{
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
}
