<?php
//  creation de la class Manger 

// Mise en lien avec nos differents fichiers Model et connexion.class


require_once "Video.class.php";
// require "Model.class.php";


class VideoManager extends Model
{
    private $videos; // tableau des videos

    public function ajouterVideo($video)
    {

        // var_dump($video);
        // die();



        $this->videos[] = $video;
    }

    public function getVideos()
    {
        return $this->videos;
    }

    public function chargementVideos()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM media");
        $req->execute();
        $videos = $req->fetchAll(PDO::FETCH_ASSOC);


        $req->closeCursor();

        foreach ($videos as $video) {

            $v = new Video($video["title"], $video["imageName"], $video["lienVideo"], $video["idVideo"], $video["idArticle"]);
            $this->ajouterVideo($v);
        }
    }
    public function getVideoById($idVideo)
    {
        for ($i = 0; $i < count($this->videos); $i++) {
            if ($this->videos[$i]->getIdVideo() === $idVideo) {
                return $this->videos[$i];
            }
        }
        // Cas pas le patient recherché , trouvé 
        //  exception 

        throw new Exception("cette vidéo n'existe pas dans notre base de données");
    }

    public function ajouterVideoBd($title, $imageName, $lienVideo, $idVideo, $idArticle)
    {
        $req = "
        INSERT INTO videos (title,imageName,lienVideo,idVideo, idArticle)
        values(:title, :imageName, :lienVideo, :idVideo, :idArticle)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":title", $title, PDO::PARAM_STR);
        $stmt->binValue(":imageName", $imageName, PDO::PARAM_STR);
        $stmt->binValue(":lienVideo", $lienVideo, PDO::PARAM_STR);
        $stmt->binValue(":idVideo", $idVideo, PDO::PARAM_INT);
        $stmt->binValue(":idArticle", $idArticle, PDO::PARAM_INT);

        $resultat = $stmt->execute();
        $stmt->closeCursor();


        // voir si $resultat a retourné qlq chose

        if ($resultat > 0) {
            // instancier une nouvelle insertion connexion patient si > 0
            // getBdd()->secondInsertId a a voir avec mon Idpatient non declaré jusque la car en auto increment
            $video = new Video($title, $imageName, $lienVideo, $this->getBdd()->fourthInsertId(), $idArticle);
            // generer la liste de patient
            $this->ajouterVideo($video);
        }
    }

    public function suppressionVideoBD($idVideo)
    {
        // var_dump($idVideo);
        // die();
        $req = "
        Delete from video where idVideo = :idVideo
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idVideo", $idVideo, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // verif de ma requete

        if ($resultat > 0) {
            $video = $this->getVideoById($idVideo);
            unset($video);
        }
    }

    public function modificationVideoBD($title, $imageName, $lienVideo, $idVideo, $idArticle)
    {
        $req = "
         update video
         set title = :title, set imageName= :imageName, set lienVideo = :lienVideo, set idVideo = :idVideo, set idArticle = :idArticle
         where idVideo = :idVideo";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":title", $title, PDO::PARAM_STR);
        $stmt->binValue(":imageName", $imageName, PDO::PARAM_STR);
        $stmt->binValue(":lienVideo", $lienVideo, PDO::PARAM_STR);
        $stmt->binValue(":idVideo", $idVideo, PDO::PARAM_INT);
        $stmt->binValue(":idArticle", $idArticle, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // si if est > 0 mise en jour des donnees ci-dessus 

        if ($resultat > 0) {
            $this->getVideoById($idVideo)->setTitle($title);
            $this->getVideoById($idVideo)->setImageName($imageName);
            $this->getVideoById($idVideo)->setLienVideo($lienVideo);
            $this->getVideoById($idVideo)->setIdVideo($idVideo);
            $this->getVideoById($idVideo)->setIdArticle($idArticle);
        }
    }
}