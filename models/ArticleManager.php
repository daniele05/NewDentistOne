<?php
require_once "models/Article.class.php";
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
}