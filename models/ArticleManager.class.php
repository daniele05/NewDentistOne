<?php
require_once "models/Blog.class.php";
require_once "models/Model.class.php";

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
}