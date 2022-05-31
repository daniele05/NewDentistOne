<?php
class Ordonnance
{
    private $titreOrdonnance;
    private $contenu;
    private $idOrdonnance;
    private $idPatient;
    private $idDentiste;

    public function __construct($titreOrdonnance, $contenu, $idOrdonnance, $idPatient, $idDentiste)
    {
        $this->titreOrdonnance = $titreOrdonnance;
        $this->contenu = $contenu;
        $this->idOrdonnace = $idOrdonnance;
        $this->idPatient = $idPatient;
        $this->iddentiste = $idDentiste;
    }

    // GETTERS AND SETTERS 
    public function getTitreOrdonnance()
    {
        return $this->getTitreOrdonnance;
    }

    public function setTitreordonnance($titreOrdonnance)
    {
        $this->titreOrdonnance = $titreOrdonnance;
    }

    public function getContenu()
    {
        return $this->getContenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function getIdOrdonnance()
    {
        return $this->getIdOrdonnance;
    }

    public function setIdOrdonnance($idOrdonnance)
    {
        $this->idOrdonnance = $idOrdonnance;
    }

    public function getIdPatient()
    {
        return $this->getIdPatient;
    }
    public function setIdPatient($idPatient)
    {
        $this->idPatient = $idPatient;
    }

    public function getIdDentiste()
    {
        return $this->getIdDentiste;
    }
    public function setIdDentiste($idDentiste)
    {
        $this->idDentiste = $idDentiste;
    }
}