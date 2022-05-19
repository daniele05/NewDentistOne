<?php
class Blog
{
    private $idArticle;
    private $created;
    private $titre;
    private $image;
    private $contenu;
    private $idDentiste;

    public function __construct($idArticle, $created, $titre, $image, $contenu,  $idDentiste)
    {
        $this->idArticle = $idArticle;
        $this->created = $created;
        $this->titre = $titre;
        $this->image = $image;
        $this->contenu = $contenu;
        $this->idDentiste = $idDentiste;
    }

    // construction des getter and setter

    // accesseurs


    public function getIdArticle()
    {
        return $this->idArticle;
    }
    public function setIdArticle($idArticle)
    {
        $this->id = $idArticle;
    }

    public function getCreated()
    {
        return $this->created;
    }
    public function setCreated($created)
    {
        $this->photo = $created;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->date = $image;
    }

    public function getContenu()
    {
        return $this->contenu;
    }
    public function setContenu($contenu)
    {
        $this->commentaire = $contenu;
    }

    public function getIdDentiste()
    {
        return $this->idDentiste;
    }
    public function setIdDentiste($idDentiste)
    {
        $this->idDentiste = $idDentiste;
    }
}