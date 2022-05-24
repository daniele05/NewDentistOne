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

        // var_dump($videos);
        // die();
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
}