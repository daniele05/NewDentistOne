<?php

require_once "models/VideoManager.class.php";


class VideoController
{
    private $videoManager;

    public function __construct()
    {
        $this->videoManager = new VideoManager;
        $this->videoManager->chargementVideos();
    }

    // Afficher tout le tableau video
    public function afficherVideos()
    {
        $videoManager = $this->videoManager;
        $videos = $videoManager->getVideos();
        require "views/videos.view.php";
    }

    //Afficher une video
    public function afficherVideo($idVideo)
    {
        $videoManager = $this->videoManager;
        $video = $videoManager->getVideoById($idVideo);

        require "views/afficherVideo.view";
    }

    // Ajouter une video

    public function ajouterVideo()
    {
        require "views/ajouterVideo.view.php";
    }

    //Modifier Vidéo
    public function modifierVideo($idVideo)
    {
        $video = $this->videoManager->getVideoById($idVideo);
        require "views/modifierVideo.view.php";
    }

    // Validation de la modification vidéos

    public function modificationVideoValidation()
    {
        $lienVideoActuelle = $this->videoManager->getVideoById($_POST['idVideo'])->getLienVideo();
        $file = $_FILES['video'];

        if ($file['size'] > 0) {
            unlink("public/asset/video/" . $lienVideoActuelle);
            $repertoire = "public/asset/video/";
            $lienVideoAjoute = $this->ajoutLienVideo($file, $repertoire);
        } else {
            $lienVideoAjoute =  $lienVideoActuelle;
        }
        $this->videoManager->modificationVideoBD($lienVideoAjoute, $_POST['title'], $_POST['imageName'], $_POST['lienVideo'], $_POST['idVideo'], $_POST['idArticle']);
    }

    // Supprimer une vidéo 


    public function suppressionVideo($idVideo)
    {
        $nomLienVideo = $this->videoManager->getVideoById($idVideo)->getLienVideo();
        unlink("public/asset/video/" . $nomLienVideo);

        // -> action de suppression dans la bdd 

        $this->videoManager->suppressionVideoBD($idVideo);


        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Suppression réalisée"
        ];
    }
    // Validation ajout video avec tous les champs 
    public function ajoutVideoValidation()
    {
        $file = $_FILES['video'];

        $repertoire = "public/asset/video/";
        $nomLienVideoAjoute = $this->ajoutLienVideo($file, $repertoire);
        $this->videoManager->ajouterVideoBd($nomLienVideoAjoute, $_POST['title'], $_POST['imageName'], $_POST['lienVideo'], $_POST['idVideo'], $_POST['idArticle']);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Ajout réalisé"
        ];

        header('Location:' . URL . "patient");
    }

    // Critères d ajout video

    public function ajoutLienVideo($file, $dir)
    {
        if (isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer un lien de video");

        if (!file_exists($dir)) mkdir($dir, 0777);
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("le fichier n'est pas un lien video");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif");
        throw new Exception("l'extension du fichier n'est pas reconnue");


        if (file_exists($target_file))
            throw new Exception("le fichier existe déjà ");

        if ($file['size'] > 500000)
            throw new Exception("le fichier trop gros ");

        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout du fichier n'a pas fonctionné ");
        else return ($random . "_" . $file['name']);
    }
}