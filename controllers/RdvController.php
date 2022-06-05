<?php
require_once "models/RdvManager.class.php";

class RdvController
{
    private $rdvManager;

    public function __construct()
    {
        $this->rdvManager = new RdvManager;
        $this->rdvManager->chargementRdvs();
    }
    // affichet le tableau de tous les rdv
    public function afficherRdvs()
    {
        $rdvManager = $this->rdvManager;
        $rdvs = $rdvManager->getRdvs();
        require "views/rdvs.view.php";
    }
    // afficher rdv
    public function afficherRdv()
    {
        require "views/afficherRdv.view.php";
    }
    // Ajout rdv 
    public function ajouterRdv()
    {
        require "views/ajouterRdv.view.php";
    }
    // Modif rdv 
    public function modifierRdv($idRdv)
    {
        $rdv = $this->rdvManager->getRdvById($idRdv);
        require "views/modifierRdv.view.php";
    }

    public function modificationRdvValidation()
    {

        $this->rdvManager->modificationRdvBD($_POST['idRdv'], $_POST['dateRdv'], $_POST['idPatient'], $_POST['idDentiste']);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Modification réalisée"
        ];

        header('Location:' . URL . "rdv");
    }

    public function suppressionRdv($idRdv)
    {
        // -> action de suppression dans la bdd 
        $this->rdvManager->suppressionRdvBD($idRdv);

        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Suppression réalisée"
        ];
    }

    public function ajoutRdvValidation()
    {

        $this->patientManager->ajouterRdvBd($_POST['idRdv'], $_POST['dateRdv'], $_POST['idPatient'], $_POST['idDentiste']);
        $_SESSION['alert'] = [
            "type"  => "success",
            "msg" => "Ajout réalisé"
        ];

        header('Location:' . URL . "rdv");
    }
}