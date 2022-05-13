<?php
//  creation de la class Manger 

// Mise en lien avec nos differents fichiers Model et connexion.class

require "Model.class.php";
require_once "Patient.class.php";





class PatientManager extends Model
{
    // tableau de patients que je parcours dans ma function getPatientById

    private $patients; // tableau patients



    public function ajouterPatient($patient)
    {
        $this->patients[] = $patient;
    }

    public function getPatients()
    {
        return $this->patients;
    }


    public function chargementPatients()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM patient");
        $req->execute();
        $patients = $req->fetchAll(PDO::FETCH_ASSOC);


        $req->closeCursor();

        foreach ($patients as $patient) {
            $p = new Patient($patient["photo"], $patient["idpatient"], $patient["istname"], $patient["lastname"], $patient["birthdate"], $patient["sex"], $patient["tel"], $patient["email"], $patient["address"], $patient["date_inscription_patient"], $patient["idsoins_dentaires"], $patient["idordonnance"]);
            $this->ajouterPatient($p);
        }
    }

    public function getPatientById($idPatient)
    {
        for ($i = 0; $i < count($this->patients); $i++) {
            if ($this->patients[$i]->getIdPatient() === $idPatient) {
                return $this->patients[$i];
            }
        }
    }


    public function ajouterPatientBd($photo, $irstName, $lastName, $birthDate, $sex, $tel, $email, $address, $dateInscription, $idSoinsDentaires, $idOrdonnance)
    {
        $req = "
        INSERT INTO connexions (photo,irstName,lastName,birthDate, sex, tel,email, address, dateInscription,:idSoinsDentaires,  idOrdonnance)
        values(:photo, :irstName, :lastName, :birthDate, :sex, :tel, :email, :address, :dateInscription,:idSoinsDentaires, :idOrdonnance)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":photo", $photo, PDO::PARAM_STR);
        $stmt->binValue(":irstName", $irstName, PDO::PARAM_STR);
        $stmt->binValue(":lastName", $lastName, PDO::PARAM_STR);
        $stmt->binValue(":birthDate", $birthDate, PDO::PARAM_INT);
        $stmt->binValue(":sex", $sex, PDO::PARAM_STR);
        $stmt->binValue(":tel", $tel, PDO::PARAM_INT);
        $stmt->binValue(":email", $email, PDO::PARAM_STR);
        $stmt->binValue(":address", $address, PDO::PARAM_STR);
        $stmt->binValue(":dateInscription", $dateInscription, PDO::PARAM_INT);
        $stmt->binValue(":idSoinsDentaires", $idSoinsDentaires, PDO::PARAM_INT);
        $stmt->binValue(":idOrdonnance", $idOrdonnance, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();


        // voir si $resultat a retourné qlq chose

        if ($resultat > 0) {
            // instancier une nouvelle insertion connexion patient si > 0
            $patient = new Patient($photo, $this->getBdd()->secondInsertId(), $irstName, $lastName, $birthDate, $sex, $tel, $email, $address, $dateInscription, $idSoinsDentaires, $idOrdonnance);
            $this->ajouterPatient($patient);
        }
    }

    public function suppressionPatientBD($idPatient)
    {
        $req = "
        Delete from connexions where id = : idPatient
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // verif de ma requete

        if ($resultat > 0) {
            $patient = $this->getPatientById($idPatient);
            unset($patient);
        }
    }
}