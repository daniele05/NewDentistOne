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
        return $this->idArticle; //retourne l'identifiant
    }
    public function setIdArticle($idArticle)
    {
        $this->id = $idArticle; //écrit dans l'attribut id
    }

    public function getCreated()
    {
        return $this->created; //retourne le nom de la photo
    }
    public function setCreated($created)
    {
        $this->photo = $created; //écrit dans l'attribut photo
    }
    public function getTitre()
    {
        return $this->titre; //retourne le titre
    }
    public function setTitre($titre)
    {
        $this->titre = $titre; //écrit dans l'attribut titre
    }

    public function getImage()
    {
        return $this->image; //retourne la date
    }
    public function setImage($image)
    {
        $this->date = $image; //écrit dans l'attribut date
    }

    public function getContenu()
    {
        return $this->contenu; //retourne le commentaire
    }
    public function setContenu($contenu)
    {
        $this->commentaire = $contenu; //écrit dans l'attribut commentaire
    }

    public function getIdDentiste()
    {
        return $this->idDentiste; //retourne le nom de la photo
    }
    public function setIdDentiste($idDentiste)
    {
        $this->idDentiste = $idDentiste; //écrit dans l'attribut photo
    }
}