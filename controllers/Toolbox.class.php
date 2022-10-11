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
                // var_dump($value);
                print '<p class="p-2 bg-' . $value["type"] . ' text-white" >' . $value["message"] . '</p>';
            }
            unset($_SESSION['alert']);
        }
    }

    public static function ajoutImage($file, $dir)
    {
        //  tester le nom de l image existe ou pas 

        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une photo");

        // repertoire existe ou pas . Si non le créer
        if (!file_exists($dir)) mkdir($dir, 0777);
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        //  extension image 

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("l'extension du fichier n'est pas reconnue");


        if (file_exists($target_file))
            throw new Exception("le fichier existe déjà ");

        //  taille du fichier
        if ($file['size'] > 50000000)
            throw new Exception("le fichier trop gros ");

        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de la photo n'a pas fonctionné ");
        else return ($random . "_" . $file['name']);
    }
}