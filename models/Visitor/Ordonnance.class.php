<?php
class Ordonnance
{
    private $idOrdonnance;
    private $datePrescription;
    private $nomPatient;
    private $prenomPatient;
    private $idPatient;
    private $denominationCommercialMedicament;
    private $idDentiste;

    public function __construct($idOrdonnance, $datePrescription, $nomPatient, $prenomPatient, $idPatient, $denominationCommercialMedicament, $idDentiste)
    {
        $this->idOrdonnance = $idOrdonnance;
        $this->datePrescription = $datePrescription;
        $this->nomPatient = $nomPatient;
        $this->prenomPatient = $prenomPatient;
        $this->idPatient = $idPatient;
        $this->denominationCommercialMedicament = $denominationCommercialMedicament;
        $this->idDentiste = $idDentiste;
    }

    // GETTERS AND SETTERS 
    public function getIdOrdonnance()
    {
        return $this->idOrdonnance;
    }

    public function setIdOdonnance($idOrdonnance)
    {
        $this->idOrdonnance = $idOrdonnance;
    }

    public function getDatePrescription()
    {
        return $this->datePrescription;
    }

    public function setDatePrescription($datePrescription)
    {
        $this->datePrescription = $datePrescription;
    }

    public function getNomPatient()
    {
        return $this->nomPatient;
    }

    public function setNomPatient($nomPatient)
    {
        $this->nomPatient = $nomPatient;
    }

    public function getPrenomPatient()
    {
        return $this->prenomPatient;
    }
    public function setPrenomPatient($prenomPatient)
    {
        $this->prenomPatient = $prenomPatient;
    }

    public function getIdPatient()
    {
        return $this->idPatient;
    }
    public function setIdPatient($idpatient)
    {
        $this->idPatient = $idpatient;
    }
    public function getDenominationCommercialMedicament()
    {
        return $this->denominationCommercialMedicament;
    }
    public function setDenominationCommercialMedicament($denominationCommercialMedicament)
    {
        $this->denominationCommercialMedicament = $denominationCommercialMedicament;
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