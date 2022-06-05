<?php
require_once "models/Rdv.class.php";

class RdvManager extends Model
{
    private $rdvs;

    public function ajouterRdv($rdv)
    {
        // var_dump($rdv);
        // die();
        $this->rdvs[] = $rdv;
    }
    public function getRdvs()
    {
        return $this->rdvs;
    }

    public function chargementRdvs()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM rdv");
        $req->execute();
        $rdvs = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach ($rdvs as $rdv) {
            $r = new Rdv($rdv["idRdv"], $rdv["dateRdv"], $rdv["idPatient"], $rdv["idDentiste"]);
            $this->ajouterRdv($r);
        }
    }

    public function getRdvById($idRdv)
    {
        for ($i = 0; $i < count($this->rdvs); $i++) {
            if ($this->rdvs[$i]->getIdRdv() === $idRdv) {
                return $this->rdvs[$i];
            }
        }
        throw new Exception("ce rdv n'existe pas dans notre base de données");
    }

    public function ajouterRdvBd($idRdv, $dateRdv, $idPatient, $idDentiste)
    {
        $req = "
        INSERT INTO patients (idRdv,dateRdv,idPatient,idDentiste)
        values(:idRdv, :dateRdv, :idPatient, :idDentiste)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":idRdv", $idRdv, PDO::PARAM_INT);
        $stmt->binValue(":dateRdv", $dateRdv, PDO::PARAM_STR);
        $stmt->binValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $stmt->binValue(":idDentiste", $idDentiste, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();


        // voir si $resultat a retourné qlq chose

        if ($resultat > 0) {
            // instancier une nouvelle insertion connexion rdv si > 0
            // getBdd()->secondInsertId a a voir avec mon Idrdv non declaré jusque la car en auto increment
            $rdv = new Rdv($idRdv, $dateRdv, $idPatient, $idDentiste);
            // generer la liste de patient
            $this->ajouterRdv($rdv);
        }
    }
    public function suppressionRdvBD($idRdv)
    {
        $req = "
        Delete from rdv where idRdv = :idRdv
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idRdv", $idRdv, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // verif de ma requete
        if ($resultat > 0) {
            $patient = $this->getRdvById($idRdv);
            unset($rdv);
        }
    }

    public function modificationRdvBD($idRdv, $dateRdv, $idPatient, $idDentiste)
    {
        $req = "
         update rdv
         set idRdv = :idRdv, set dateRdv= :dateRdv, set idPatient = :idPatient, set idDentiste = :idDentiste
         where idRdv = :idRdv";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":idRdv", $idRdv, PDO::PARAM_INT);
        $stmt->binValue(":dateRdv", $dateRdv, PDO::PARAM_STR);
        $stmt->binValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $stmt->binValue(":idDentiste", $idDentiste, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // si if est > 0 mise en jour des donnees ci-dessus 

        if ($resultat > 0) {
            $this->getRdvById($idRdv)->setIdRdv($idRdv);
            $this->getRdvById($dateRdv)->setDateRdv($dateRdv);
            $this->getRdvById($idPatient)->setIdRdv($idPatient);
            $this->getRdvById($idDentiste)->setIdRdv($idDentiste);
        }
    }
}