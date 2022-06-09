<?php

class Video
{

    private $title;
    private $imageName;
    private $lienVideo;
    private $idVideo;



    public function __construct($title, $imageName, $lienVideo, $idVideo)
    {

        $this->title = $title;
        $this->imageName = $imageName;
        $this->lienVideo = $lienVideo;
        $this->idVideo = $idVideo;
    }

    // construction des getter and setter

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getImageName()
    {
        return $this->imageName;
    }
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }
    public function getLienVideo()
    {
        return $this->lienVideo;
    }
    public function setLienVideo($lienVideo)
    {
        $this->lienVideo = $lienVideo;
    }

    public function getIdVideo()
    {
        return $this->idVideo;
    }
    public function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;
    }
}