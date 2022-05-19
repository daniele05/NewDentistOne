<?php
require_once "models/Model.class.php";
require_once "models/Blog.class.php";

class Article extends Model
{

    private $articles; // tableau articles

    public function ajouterArticle($article)
    {

        $this->articles[] = $article;
    }


    public function getArticles()
    {

        return $this->articles;
    }

    public function chargementArticles()
    {
        $req = $this->getBdd()->prepare("SELECT *FROM article");
        $req->execute();
        $articles = $req->fetchAll(PDO::FETCH_ASSOC);


        $req->closeCursor();

        foreach ($articles as $article) {

            $this->ajouterArticle($article);
        }
    }

    public function getArticleById($idArticle)
    {

        for ($i = 0; $i < count($this->articles); $i++) {
            if ($this->articles[$i]->getIdArticle() === $idArticle) {
                return $this->articles[$i];
            }
        }

        throw new Exception("cet article n'existe pas dans notre base de données");
    }


    public function ajouterArticleBdd($idArticle, $created, $titre, $image, $contenu, $idDentiste)
    {
        $req = "
        INSERT INTO articles (idArticle,created,titre,image, contenu, idDentiste)
        values(:idArtcle, :created, :titre, :image, :contenu, :idDentiste)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":idArticle", $idArticle, PDO::PARAM_STR);
        $stmt->binValue(":created", $created, PDO::PARAM_STR);
        $stmt->binValue(":titre", $titre, PDO::PARAM_INT);
        $stmt->binValue(":image", $image, PDO::PARAM_STR);
        $stmt->binValue(":contenu", $contenu, PDO::PARAM_STR);
        $stmt->binValue(":idDentiste", $idDentiste, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // voir si $resultat a retourné qlq chose

        if ($resultat > 0) {
            // instancier une nouvelle insertion article si > 0
            $article = new Article($idArticle, $this->getBdd()->secondInsertId(), $created, $titre, $image, $contenu, $idDentiste);
            $this->ajouterArticle($idArticle);
        }
    }

    public function suppressionArticleBD($idArticle)
    {
        $req = "
        Delete from article where id = : idArticle
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idArticle", $idArticle, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // verif de ma requete

        if ($resultat > 0) {
            $article = $this->getArticleById($idArticle);
            unset($article);
        }
    }

    public function modificationArticleBD($idArticle, $created, $titre, $image, $contenu, $idDentiste)
    {

        $req = "
         update articles
         set idArticle = :idArticle, set created= :idCreated, set titre = :titre, set image = :image, set contenu = :contenu, set idDentiste = :idDentiste 
         where idArticle = :idArticle";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->binValue(":idArticle", $idArticle, PDO::PARAM_STR);
        $stmt->binValue(":created", $created, PDO::PARAM_STR);
        $stmt->binValue(":titre", $titre, PDO::PARAM_INT);
        $stmt->binValue(":image", $image, PDO::PARAM_STR);
        $stmt->binValue(":contenu", $contenu, PDO::PARAM_STR);
        $stmt->binValue(":idDentiste", $idDentiste, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // si if est > 0 mise en jour des donnees ci-dessus 

        if ($resultat > 0) {
            $this->getArticleById($idArticle)->setIdArticle($idArticle);
            $this->getArticleById($idArticle)->setCreated($created);
            $this->getArticleById($idArticle)->setTitre($titre);
            $this->getArticleById($idArticle)->setImage($image);
            $this->getArticleById($idArticle)->setContenu($contenu);
            $this->getArticleById($idArticle)->setIdDentiste($idDentiste);
        }
    }
}