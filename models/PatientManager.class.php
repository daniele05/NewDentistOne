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
            $p = new Patient($patient["image"], $patient["idPatient"], $patient["istName"], $patient["lastName"], $patient["birthDate"], $patient["sex"], $patient["tel"], $patient["email"], $patient["address"], $patient["dateInscriptionPatient"], $patient["idSoinsDentaires"], $patient["idordonnance"]);
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
        // Cas pas le patient recherché , trouvé 
        //  exception 

        throw new Exception("ce patient n'existe pas dans notre base de données");
    }


    public function ajouterPatientBd($image, $irstName, $lastName, $birthDate, $sex, $tel, $email, $address, $dateInscriptionPatient, $idSoinsDentaires, $idOrdonnance)
    {
        $req = "
        INSERT INTO connexions (image,irstName,lastName,birthDate, sex, tel,email, address, dateInscriptionPatient,:idSoinsDentaires,  idOrdonnance)
        values(:image, :irstName, :lastName, :birthDate, :sex, :tel, :email, :address, :dateInscriptionPatient,:idSoinsDentaires, :idOrdonnance)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":image", $image, PDO::PARAM_STR);
        $stmt->binValue(":irstName", $irstName, PDO::PARAM_STR);
        $stmt->binValue(":lastName", $lastName, PDO::PARAM_STR);
        $stmt->binValue(":birthDate", $birthDate, PDO::PARAM_INT);
        $stmt->binValue(":sex", $sex, PDO::PARAM_STR);
        $stmt->binValue(":tel", $tel, PDO::PARAM_INT);
        $stmt->binValue(":email", $email, PDO::PARAM_STR);
        $stmt->binValue(":address", $address, PDO::PARAM_STR);
        $stmt->binValue(":dateInscriptionPatient", $dateInscriptionPatient, PDO::PARAM_INT);
        $stmt->binValue(":idSoinsDentaires", $idSoinsDentaires, PDO::PARAM_INT);
        $stmt->binValue(":idOrdonnance", $idOrdonnance, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();


        // voir si $resultat a retourné qlq chose

        if ($resultat > 0) {
            // instancier une nouvelle insertion connexion patient si > 0
            $patient = new Patient($image, $this->getBdd()->secondInsertId(), $irstName, $lastName, $birthDate, $sex, $tel, $email, $address, $dateInscriptionPatient, $idSoinsDentaires, $idOrdonnance);
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

    public function modificationPatientBD($image, $idPatient, $irstName, $lastName, $birthDate, $sex, $tel, $email, $address, $dateInscriptionPatient, $idSoinsDentaires, $idOrdonnance)
    {
        $req = "
         update patients
         set image = :image, set idPatient= :idPatient, set irstName = :irstName, set lastName = :lastName, set birthDate = :birthDate, set sex = :sex, set tel = :tel, set email = :email, set address = :address, set dateInscriptionPatient = :dateInscriptionPatient, set idSoinsDentaires = :idSoinsDentaires, set idOrdonnance = :idOrdonnance
         where idPatient = :idPatient";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":image", $image, PDO::PARAM_STR);
        $stmt->binValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $stmt->binValue(":irstName", $irstName, PDO::PARAM_STR);
        $stmt->binValue(":lastName", $lastName, PDO::PARAM_STR);
        $stmt->binValue(":birthDate", $birthDate, PDO::PARAM_INT);
        $stmt->binValue(":sex", $sex, PDO::PARAM_STR);
        $stmt->binValue(":tel", $tel, PDO::PARAM_INT);
        $stmt->binValue(":email", $email, PDO::PARAM_STR);
        $stmt->binValue(":address", $address, PDO::PARAM_STR);
        $stmt->binValue(":dateInscriptionPatient", $dateInscriptionPatient, PDO::PARAM_INT);
        $stmt->binValue(":idSoinsDentaires", $idSoinsDentaires, PDO::PARAM_INT);
        $stmt->binValue(":idOrdonnance", $idOrdonnance, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // si if est > 0 mise en jour des donnees ci-dessus 

        if ($resultat > 0) {
            $this->getPatientById($idPatient)->setImage($image);
            $this->getPatientById($idPatient)->setIrstName($irstName);
            $this->getPatientById($idPatient)->setLastName($lastName);
            $this->getPatientById($idPatient)->setBirthDate($birthDate);
            $this->getPatientById($idPatient)->setSex($sex);
            $this->getPatientById($idPatient)->setTel($tel);
            $this->getPatientById($idPatient)->setEmail($email);
            $this->getPatientById($idPatient)->setAddress($address);
            $this->getPatientById($idPatient)->setDateInscriptionPatient($dateInscriptionPatient);
            $this->getPatientById($idPatient)->setIdSoinsDentaires($idSoinsDentaires);
            $this->getPatientById($idPatient)->setIdOrdonnance($idOrdonnance);
        }
    }
}