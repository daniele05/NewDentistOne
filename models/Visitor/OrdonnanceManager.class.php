<?php
require_once "models/Visitor/Ordonnance.class.php";

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
        INSERT INTO oronnances (idOrdonnance, datePrescription, nomPatient, prenomPatient, idPatient, denominationCommercialMedicament, idDentiste) values (:idOrdonnance, :datePrescription :nomPatient, :prenomPatient, :idPatient, :denominationCommercialMedicament, :idDentiste)";
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
    }
}