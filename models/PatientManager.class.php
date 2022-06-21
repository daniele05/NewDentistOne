<?php
//  creation de la class Manger 

// Mise en lien avec nos differents fichiers Model et connexion.class

require_once "Model.class.php";
require_once "Patient.class.php";


class PatientManager extends Model
{
    // tableau de patients que je parcours dans ma function getPatientById

    private $patients; // tableau patients


    public function chargementPatients()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM patient");
        $req->execute();
        $patients = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach ($patients as $patient) {
            $p = new Patient($patient["image"], $patient["idPatient"], $patient["irstName"], $patient["lastName"], $patient["birthDate"], $patient["sex"], $patient["tel"], $patient["email"], $patient["address"], $patient["dateInscriptionPatient"], $patient["idSoinsDentaires"], $patient["idOrdonnance"]);
            $this->ajouterPatient($p);
        }
    }
    public function getPatients()
    {
        return $this->patients;
    }

    public function ajouterPatient($patient)
    {
        // var_dump($patient);
        // die();


        $this->patients[] = $patient;
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
        $req =
            'INSERT INTO patient (image,irstName,lastName,birthDate, sex, tel,email, address, dateInscriptionPatient,idSoinsDentaires,  idOrdonnance)
        values(:image, :irstName, :lastName, :birthDate, :sex, :tel, :email, :address, :dateInscriptionPatient,:idSoinsDentaires, :idOrdonnance)';
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(':image', $image, PDO::PARAM_STR);
        $stmt->bindValue(':irstName', $irstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindValue(':birthDate', $birthDate, PDO::PARAM_STR);
        $stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindValue(':tel', $tel, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':address', $address, PDO::PARAM_STR);
        $stmt->bindValue(':dateInscriptionPatient', $dateInscriptionPatient, PDO::PARAM_STR);
        $stmt->bindValue(':idSoinsDentaires', $idSoinsDentaires, PDO::PARAM_INT);
        $stmt->bindValue(':idOrdonnance', $idOrdonnance, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();
    }

    public function suppressionPatientBD($idPatient)
    {
        $req = "Delete from patient where idPatient = :idPatient";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
    }

    public function modificationPatientBD($image, $idPatient, $irstName, $lastName, $birthDate, $sex, $tel, $email, $address, $dateInscriptionPatient, $idSoinsDentaires, $idOrdonnance)
    {

        $req = "
         update patient
         set image = :image, irstName = :irstName, lastName = :lastName, 
         birthDate = :birthDate, sex = :sex, tel = :tel, email = :email, address = :address, 
         dateInscriptionPatient = :dateInscriptionPatient where idPatient = :idPatient";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $stmt->bindValue(":irstName", $irstName, PDO::PARAM_STR);
        $stmt->bindValue(":lastName", $lastName, PDO::PARAM_STR);
        $stmt->bindValue(":birthDate", $birthDate, PDO::PARAM_STR);
        $stmt->bindValue(":sex", $sex, PDO::PARAM_STR);
        $stmt->bindValue(":tel", $tel, PDO::PARAM_STR);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->bindValue(":address", $address, PDO::PARAM_STR);
        $stmt->bindValue(':dateInscriptionPatient', $dateInscriptionPatient, PDO::PARAM_STR);
        $stmt->bindValue(":idPatient", $idPatient, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();
    }
}