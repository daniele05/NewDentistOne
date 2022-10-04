<?php
require_once "Model.class.php";
require_once "Photo.class.php";


class PhotoManager extends Model
{

    private $photos; // tableau photos


    public function chargementPhotos()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM photo");
        $req->execute();
        $photos = $req->fetchAll(PDO::FETCH_ASSOC);

        $req->closeCursor();

        foreach ($photos as $photo) {
            $p = new Photo($photo["idPhoto"], $photo["titrePhoto"], $photo["photo"]);
            $this->ajouterPhoto($p);
        }
    }
    public function getPhotos()
    {
        return $this->photos;
    }
}
