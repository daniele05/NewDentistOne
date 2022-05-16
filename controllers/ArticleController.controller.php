<?php
// Controller associer à la vue (article.view.php)

require_once "models/Blog.class.php";
require_once "models/Model.class.php";
require_once "models/ArticleManager.class.php";

class ArticleController extends Model
{
    private $articleManager;

    public function __construct()
    {

        $this->articleManager = new Article;
    }

    // Afficher tout le tableau article
    public function afficherArticle()
    {
        $articleManager = $this->articleManager;
        $articleManager->chargementArticles();
        $articles = $articleManager->getArticles();

        require "views/article.view.php";
    }

    public function ajouterArticle()
    {
        require "views/ajoutArticle.view.php";
    }
}