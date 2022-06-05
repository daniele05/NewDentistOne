<?php
require_once "models/User/Ordonnance.class.php";

class OrdonnanceManager extends Model
{
    private $ordonnances;

    public function ajouterOrdonnance($ordonnance)
    {
        $this->ordonnances[] = $ordonnance;
        // var_dump($ordonnance);
        // die();
    }
    public function getOrdonnances()
    {
        return $this->ordonnances;
    }

    public function chargementOrdonnances()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM ordonnance");
        $req->execute();
        $ordonnances = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach ($ordonnances as $ordonnance) {
            $o = new Ordonnance($ordonnance["idOrdonnance"], $ordonnance["datePrescription"], $ordonnance["nomPatient"], $ordonnance["prenomPatient"], $ordonnance["idPatient"], $ordonnance["denominationCommercialMedicament"], $ordonnance["idDentiste"]);
            $this->ajouterOrdonnance($o);
        }
    }
    public function getOrdonnanceById($idPatient)
    {
        for ($i = 0; $i < count($this->ordonnances); $i++) {
            if ($this->ordonnances[$i]->getidPatient() === $idPatient)
                return $this->ordonnances[$i];
        }
        throw new Exception("cette ordonnace ne figure pas dans notre base de données");
    }

    public function ajouterOrdonnanceBd($idOrdonnance, $datePrescription, $nomPatient, $prenomPatient, $idPatient, $denominationCommercialMedicament, $idDentiste)
    {
        $req = "
        INSERT INTO ordonnances (idOrdonnance, datePrescription, nomPatient, prenomPatient, idPatient, denominationCommercialMedicament, idDentiste) values (:idOrdonnance, :datePrescription :nomPatient, :prenomPatient, :idPatient, :denominationCommercialMedicament, :idDentiste)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":idOrdonnance", $idOrdonnance, PDO::PARAM_INT);
        $stmt->binValue(":datePrescription", $datePrescription, PDO::PARAM_STR);
        $stmt->binValue(":nomPatient", $nomPatient, PDO::PARAM_STR);
        $stmt->binValue(":prenomPatient", $prenomPatient, PDO::PARAM_STR);
        $stmt->binValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $stmt->binValue(":denominationCommercialMedicament", $denominationCommercialMedicament, PDO::PARAM_STR);
        $stmt->binValue(":idDentiste", $idDentiste, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $ordonnance = new Ordonnance($idOrdonnance, $datePrescription, $nomPatient, $prenomPatient, $idPatient, $denominationCommercialMedicament, $idDentiste);

            $this->ajouterOrdonnance($ordonnance);
        }
    }

    public function suppressionOrdonnanceBD($idPatient)
    {
        $req = "
        Delete from ordonnance where idPatient = :idPatient";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // veridf de la req
        if ($resultat > 0) {
            $ordonnance = $this->getOrdonnancebyId($idPatient);
            unset($ordonnance);
        }
    }

    public function modificationOrdonnanceBD($idOrdonnance, $datePrescription, $nomPatient, $prenomPatient, $idPatient, $denominationCommercialMedicament, $idDentiste)
    {
        $req = "
        update ordonnance
        set idOrdonnance = :idOrdonnance, set datePrescription = :datePrescription, set nomPatient= :nomPatient, set prenomPatient= :prenomPatient, set idPatient= :idPatient, set denominationCommercialMedicament = :denominationCommercialMedicament, set idDentiste = :idDentiste
        where idPatient = :idPatient";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":idOrdonnance", $idOrdonnance, PDO::PARAM_INT);
        $stmt->binValue(":datePrescription", $datePrescription, PDO::PARAM_STR);
        $stmt->binValue(":nomPatient", $nomPatient, PDO::PARAM_STR);
        $stmt->binValue(":prenomPatient", $prenomPatient, PDO::PARAM_STR);
        $stmt->binValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $stmt->binValue(":denominationCommercialMedicament", $denominationCommercialMedicament, PDO::PARAM_STR);
        $stmt->binValue(":idDentiste", $idDentiste, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // si if est > 0 mise a jour des donnees ci-dessous

        if ($resultat > 0) {
            $this->getOrdonnanceById($idPatient)->setIdOrdonnance($idOrdonnance);
            $this->getOrdonnanceById($idPatient)->setDateprescription($datePrescription);
            $this->getOrdonnanceById($idPatient)->setNomPatient($nomPatient);
            $this->getOrdonnanceById($idPatient)->setPrenomPatient($prenomPatient);
            $this->getOrdonnanceById($idPatient)->setIdPatient($idPatient);
            $this->getOrdonnanceById($idPatient)->setDenominationCommercialMedicament($denominationCommercialMedicament);
            $this->getOrdonnanceById($idPatient)->setIdDentiste($idDentiste);
        }
    }
}