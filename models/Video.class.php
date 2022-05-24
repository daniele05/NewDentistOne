<?php

class Video
{

    private $title;
    private $imageName;
    private $lienVideo;
    private $idArticle;


    public function __construct($title, $imageName, $lienVideo, $idArticle)
    {

        $this->title = $title;
        $this->imageName = $imageName;
        $this->lienVideo = $lienVideo;
        $this->idArticle = $idArticle;
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
    public function getIdArticle()
    {
        return $this->idArticle;
    }
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }
}