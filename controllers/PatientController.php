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
        require "views/patients.view.php";
    }

    // Afficher un patient 

    // public function afficherPatient($idPatient)
    public function afficherPatient($idPatient)
    {

        $patientManager = $this->patientManager->getPatientById($idPatient);


        // echo $patient->getIrstName();

        require "views/afficherPatient.view.php";
    }

    // Ajouter un patient 

    public function ajouterPatient()
    {
        require "views/ajouterPatient.view.php";
    }




    // Modification patient 

    public function modifierPatient($idPatient)
    {
        $patient = $this->patientManager->getPatientById($idPatient);
        require "views/modifierPatient.view.php";
    }

    // validation de la modification

    public function modificationPatientValidation()
    {
        $imageActuelle = $this->patientManager->getPatientById($_POST['identifiantPatient'])->getImage();
        $file = $_FILES['img'];

        if ($file['size'] > 0) {
            unlink("public/asset/img/" . $imageActuelle);
            $repertoire = "public/asset/img/";
            $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        } else {
            $nomImageAjoute =  $imageActuelle;
        }
        $this->patientManager->modificationPatientBD($nomImageAjoute, $_POST['photo'], $_POST['idPatient'], $_POST['irstName'], $_POST['lastName'], $_POST['birthDate'], $_POST['sex'], $_POST['tel'], $_POST['email'], $_POST['address'], $_POST['dateInscriptionPatient'], $_POST['idOrdonnance']);

        // $_SESSION['alert'] = [
        //     "type"  => "success",
        //     "msg" => "Modification réalisée"
        // ];
        Toolbox::ajouterMessageAlerte("Modification réussie", Toolbox::VERTE);

        header('Location:' . URL . "patient");
    }


    // Supprimer un patient 


    public function suppressionPatient($idPatient)
    {
        $nomImage = $this->patientManager->getPatientById($idPatient)->getImage();
        unlink("public/asset/img/" . $nomImage);

        // -> action de suppression dans la bdd 

        $this->patientManager->suppressionPatientBD($idPatient);


        // $_SESSION['alert'] = [
        //     "type"  => "success",
        //     "msg" => "Suppression réalisée"
        // ];
    }

    // Validation ajout patient avec tous les champs 
    public function ajoutPatientValidation()
    {
        $file = $_FILES['img'];


        $repertoire = "public/asset/img/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        $this->patientManager->ajouterPatientBd($nomImageAjoute, $_POST['idPatient'], $_POST['irstName'], $_POST['lastName'], $_POST['birthDate'], $_POST['sex'], $_POST['tel'], $_POST['email'], $_POST['address'], $_POST['dateInscriptionPatient'], $_POST['idSoinsDentaires'], $_POST['idOrdonnance']);

        // $_SESSION['alert'] = [
        //     "type"  => "success",
        //     "msg" => "Ajout réalisé"
        // ];

        Toolbox::ajouterMessageAlerte("Ajout réalisé", Toolbox::VERTE);

        header('Location:' . URL);
        print_r($file);
    }



    // Critères d ajout de photo 

    private function ajoutImage($file, $dir)
    {

        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une photo");

        if (!file_exists($dir)) mkdir($dir, 0777);
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];
        // var_dump($extension);
        // die();
        if (!getimagesize($file["tmp_name"]))
            throw new Exception("le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
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