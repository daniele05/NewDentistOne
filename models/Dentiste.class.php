<?php
class Dentiste
{
    private $idDentiste;
    private $login;
    private $mdp;
    private $idPatient;
    private $idRdv;
    private $idSoinsDentaires;
    private $idOrdonnance;

    public function __construct($idDentiste, $login, $mdp, $idPatient, $idRdv, $idSoinsDentaires, $idOrdonnance)
    {
        $this->idDentiste = $idDentiste;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->idPatient = $idPatient;
        $this->idRdv = $idRdv;
        $this->idSoinsDentaires = $idSoinsDentaires;
        $this->idOrdonnance = $idOrdonnance;
    }

    //  Getters and setters 
    public function getIdDentiste()
    {
        return $this->idDentiste;
    }
    public function setIdDentiste($idDentiste)
    {
        $this->idDentiste = $idDentiste;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getMdp()
    {
        return $this->mdp;
    }
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function getIdPatient()
    {
        return $this->idPatient;
    }
    public function setIdPatient($idPatient)
    {
        $this->idPatient = $idPatient;
    }

    public function getIdRdv()
    {
        return $this->idRdv;
    }
    public function setIdRdv($idRdv)
    {
        $this->idRdv = $idRdv;
    }
    public function getIdSoinsDentaires()
    {
        return $this->idSoinsDentaires;
    }
    public function setIdSoinsDentaires($idSoinsDentaires)
    {
        $this->idSoinsDentaires = $idSoinsDentaires;
    }
    public function getIdOrdonnance()
    {
        return $this->idOrdonnance;
    }
    public function setIdOrdonnance($idOrdonnance)
    {
        $this->idOrdonnance = $idOrdonnance;
    }
}