<?php
require_once "models/User/OrdonnanceManager.class.php";

class OrdonnanceController
{
    private $ordonnanceManager;

    public function __construct()
    {
        $this->ordonnanceManager = new OrdonnanceManager;
        $this->ordonnanceManager->chargementOrdonnances();
    }

    //Afficher tout le tableau 
    public function afficherOrdonnances()
    {
        $ordonnanceManager = $this->ordonnanceManager;
        $ordonnances = $ordonnanceManager->getOrdonnances();
        require "views/Visitor/ordonnances.view.php";
    }
    // afficher une ordonnance
    public function afficherOrdonnance()
    {
        require "views/Visitor/afficherOrdonnance.view.php";
    }
    // Ajouter une ordonnance 

    public function ajouterOrdonnance()
    {
        require "views/Visitor/ajouterOrdonnance.view.php";
    }

    // Modification ordonnance
    public function modifierOrdonnance($idPatient)
    {
        $ordonnance = $this->ordonnanceManager->getOrdonnanceById($idPatient);
        require "views/Visitor/modifierOrdonnance.view.php";
    }
    // val modif 
    public function modificationOrdonnanceValidation()
    {
        // $denominationCommercialMedicamentActuelle= $this->ordonnanceManager->getIdPatient($_POST['identifiantPatient'])->getDenominationCommercialMedicament();
        $this->ordonnanceManager->modificationOrdonnanceBD($_POST['idOrdonnance'], $_POST['datePrescription'], $_POST['nomPatient'], $_POST['prenomPatient'], $_POST['idPatient'], $_POST['id'], $_POST['idDentiste']);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Modification réalisée"
        ];

        header('Location:' . URL . "ordonnance");
    }

    public function suppressionOrdonnance($idPatient)
    {
        $this->ordonnanceManager->suppressionOrdonnanceBD($idPatient);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Suppression réalisée"
        ];
    }
    // valid ajout ordonnance avec tpous les champs 
    public function ajoutOrdonnanceValidation()
    {
        $this->OrdonnanceManager->ajouterOrdonnanceBd($_POST['idOrdonnance'], $_POST['datePrescription'], $_POST['nomPatient'], $_POST['prenomPatient'], $_POST['idPatient'], $_POST['id'], $_POST['idDentiste']);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Ajout réalisée"
        ];

        header('Location:' . URL . "ordonnance");
    }
}