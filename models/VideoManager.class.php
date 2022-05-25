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
}