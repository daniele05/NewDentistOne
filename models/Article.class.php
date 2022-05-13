<?php
class Article
{
    private $idArticle;
    private $contenu;
    private $created;
    private $titre;
    private $idDentiste;

    public function __construct($idArticle, $contenu, $created, $titre, $idDentiste)
    {
        $this->idArticle = $idArticle;
        $this->contenu = $contenu;
        $this->created = $created;
        $this->titre = $titre;
        $this->idDentiste = $idDentiste;
    }

    // construction des getter and setter

    public function getIdArticle()
    {
        return $this->idArticle;
    }


    public function setIdArticle($idArticle)
    {
        if (isset($idArticle) && !empty($idArticle)) {
            $this->idArticle = $idArticle;
        } else {
            echo "Problème avec l'Id <br>";
        }
    }

    public function getContenu()
    {
        return $this->contenu;
    }
    public function setContenu($contenu)
    {
        if (isset($contenu) && !empty($contenu)) {
            $this->contenu = $contenu;
        } else {
            echo "problème avec le contenu <br>";
        }
    }

    public function getCreated()
    {
        return $this->created;
    }
    public function setCreated($created)
    {
        if (isset($created) && !empty($created)) {
            $this->created = $created;
        } else {
            echo "problème avec la date de creation";
        }
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        if (isset($titre) && !empty($titre)) {
            $this->titre = $titre;
        } else {
            echo "Problème avec le titre";
        }
    }

    public function getIdDentiste()
    {
        return $this->idDentiste;
    }
    public function setIdDentiste($idDentiste)
    {
        if (isset($idDentiste) && !empty($idDentiste)) {
            $this->idDentiste = $idDentiste;
        } else {
            echo "Problème avec l'Id Dentiste";
        }
    }
}