<?php

require_once "models/PatientManager.class.php";


class PatientController
{
    private $patientManager;

    public function __construct()
    {

        $this->patientManager = new PatientManager;
        $this->patientManager->chargementPatients();
    }

    // Afficher tout le tableau patient
    public function afficherPatients()
    {
        $patientManager = $this->patientManager;
        $patients = $patientManager->getPatients();
        require "views/patient.view.php";
    }

    // Afficher un patient 

    public function afficherPatient($idPatient)
    {
        $patient = $this->patientManager->getPatientById($idPatient);
        // echo $patient->getIdPatient();

        require "views/afficherPatient.view.php";
    }

    // Ajouter un patient 

    public function ajouterPatient()
    {
        require "views/ajouterPatient.view.php";
    }


    // Valiadtaion ajout patient avec tous les champs 
    public function ajoutPatientValidation()
    {
        $file = $_FILES['photo'];
        // print_r($file);$_POST['idSoinsDentaires']
        $repertoire = "public/asset/img/";
        $nomImageAjoute = $this->ajoutPhoto($file, $repertoire);
        $this->connexionManager->ajouterConnexionBd($_POST['photo'], $_POST['idPatient'], $_POST['irstName'], $_POST['lastName'], $_POST['birthDate'], $_POST['sex'], $_POST['tel'], $_POST['email'], $_POST['address'], $_POST['dateInscription'], $_POST['idOrdonnance'], $nomImageAjoute);
        header('Location:' . URL . "patient");
    }

    // Modification patient 
    public function modifierPatient()
    {
        $patient = $this->patientManager->getPatientById($idPatient);
        require "views/modifierPatient.view.php";
    }

    // Supprimer un patient 

    public function suppressionPatient($idPatient)
    {
        $nomPhoto = $this->patientManager->getPatientById($idPatient)->getPhoto();
        unlink("public/asset/image/" . $nomPhoto);

        // -> action de suppression dans la bdd 

        $this->patientManager->suppressionPatientBD($idPatient);
    }



    // Critères d ajout de photo 

    private function ajoutPhoto($file, $dir)
    {
        if (isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une photo");

        if (!file_exists($dir)) mkdir($dir, 0777);
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if (!getPhoto($file["tmp_name"]))
            throw new Exception("le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif");
        throw new Exception("l'extension du fichier n'est pas reconnue");


        if (file_exists($target_file))
            throw new Exception("le fichier existe déjà ");

        if ($file['size'] > 500000)
            throw new Exception("le fichier trop gros ");

        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de la photo n'a pas fonctionné ");
        else return ($random . "_" . $file['name']);
    }
}