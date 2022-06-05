<?php
class Rdv
{
    private $idRdv;
    private $dateRdv;
    private $idPatient;
    private $idDentiste;

    public function __construct($idRdv, $dateRdv, $idPatient, $idDentiste)
    {
        $this->idRdv = $idRdv;
        $this->dateRdv = $dateRdv;
        $this->idPatient = $idPatient;
        $this->idDentiste = $idDentiste;
    }
    //   getters and setters
    public function getIdRdv()
    {
        return $this->idRdv;
    }
    public function setIdRdv($idRdv)
    {
        $this->idRdv = $idRdv;
    }

    public function getDateRdv()
    {
        return $this->dateRdv;
    }
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;
    }
    public function getIdPatient()
    {
        return $this->idPatient;
    }
    public function setIdpatient($idPatient)
    {
        $this->idPatient = $idPatient;
    }
    public function getIddentiste()
    {
        return $this->idDentiste;
    }
    public function setIdDentiste($idDentiste)
    {
        $this->idDentiste = $idDentiste;
    }
}